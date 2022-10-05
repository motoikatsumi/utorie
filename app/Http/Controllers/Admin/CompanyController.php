<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\GenreRepositoryInterface;
use App\Interfaces\PrefDataRepositoryInterface;
use App\Models\Image;
use App\Models\Company;
use App\Models\Area;
use App\Models\Office;
use App\Models\Review;
use App\Models\AreaCompany;
use App\Models\CompanyGenre;
use App\Models\CompanyPref;
use App\Models\RelatedCompany;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use App\Repositories\StickingRepo;
use Maatwebsite\Excel\Facades\Excel;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $pathViewController = 'admin.pages.company.';
    private $companyRepo;
    private $prefectureRepo;
    private $genreRepo;
    private $company;
    private $area;
    private $stickingRepo;

    public function __construct(Company $company, Area $area, CompanyRepositoryInterface $companyRepo, PrefDataRepositoryInterface $prefectureRepo, GenreRepositoryInterface $genreRepo, StickingRepo $stickingRepo)
    {
        $this->middleware('auth');
        $this->companyRepo = $companyRepo;
        $this->prefectureRepo = $prefectureRepo;
        $this->genreRepo = $genreRepo;
        $this->company = $company;
        $this->area = $area;
        $this->stickingRepo = $stickingRepo;
        view()->share([
            'title' => 'Company',
            'head_title' => '更新プログラム管理画面',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $companies = $this->companyRepo->where('delete_flg', 0)->orderBy('id', 'ASC');
        $limit = isset($request['limit']) ? $request['limit'] : $limit = Config::get('define.admin_pagination');
        $prefectures = $this->prefectureRepo->get();

        if ($request->ajax()) {
            $output = $this->prefectureRepo->getAreaInPrefecture($request->pref_id, 'html');
            return $output;
        }

        if (isset($request->search)) {
            $companies->with('getAreas')
                ->filter($request->all());
            if (isset($request->area)) {
                $companies->whereHas('getAreas', function ($q) use ($request) {
                    $q->whereIn('area_id', (array) $request->area);
                });
            }
        }
        $companies = $companies->paginate($limit);
        return view(
            $this->pathViewController . 'index',
            ['companies' => $companies],
            ['prefectures' => $prefectures]
        );
    }

    public function create(Request $request)
    {
        $genres = $this->genreRepo->get();
        $prefectures = $this->prefectureRepo->get();
        $stickings = $this->stickingRepo->get();
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $request->company_id = json_decode($request->company_id);
                $request->impossible_area_id = json_decode($request->impossible_area_id);                
                $company = $this->companyRepo->create($request->toArray());
                $company->getAreas()->sync($request->area_id);
                $company->getGenres()->sync($request->genre_id);
                $company->getStickings()->sync($request->sticking_id);
                $company->getPrefs()->sync($request->pref);                
                $company->getImpossibleAreas()->sync($request->impossible_area_id);
                
                if ($request->company_id) {
                    foreach ($request->company_id as $id) {
                        $company->getRelateds()->create([
                            'related_id' => $id
                        ]);
                    }
                }
       
                DB::commit();
                return redirect()->route('company.index')->with(['message' => 'Create successfully', 'alert-class' => 'success']);
            } catch (Exception $exception) {
                DB::rollback();                
                return back()->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        return view($this->pathViewController . 'create')->with([
            'genres' => $genres,
            'prefectures' => $prefectures,
            'stickings' => $stickings
        ]);
    }

    public function edit(Request $request, $id)
    {
        $company = $this->companyRepo->with('getImages')->find($id);
        $prefectures = $this->prefectureRepo->get();
        $genres = $this->genreRepo->get(); 

        //get genres has company;
        $selectedGenres = $this->company->find($id)->getGenres;
        //get stickings has company;
        $selectedStickings = $this->company->find($id)->getStickings;
        //get prefs has company;
        $selectedPrefs = $this->company->find($id)->getPrefs;
        //get selected cities;
        $selectedAreas = $this->company->find($id)->getAreas;

        // dd($selectedStickings);
        $stickingNotSelected = $this->stickingRepo->whereNotIn('id', $selectedStickings->pluck('id')->toArray())->get();

        //get cities of selected Prefs;        
        $AreasBySelectedPrefs = collect([]);
        if ($selectedPrefs->first()) {
            $ids = $selectedPrefs->pluck('id')->toArray();
            $AreasBySelectedPrefs = $this->prefectureRepo->getAreaByPref($ids);
        }

        //get related companies;        
        $related_id = $company->getRelateds()->where('company_id', $id)->get()->pluck('related_id')->unique()->toArray();
        if (count($related_id)) {
            $relates = $this->companyRepo->whereIn('id', $related_id)->get(['id', 'company_name']);
        } else {
            $relates = collect([]);
        }

        //get impossible area;         
        $impossibleAreas = $this->company->find($id)->getImpossibleAreas;        

        if ($request->ajax()) {
            $img = Image::findOrFail($request->img_id)->delete();
            return response()->json($img);
        } elseif ($request->isMethod('POST')) {
            
            DB::beginTransaction();
            try {
                
                $company = $this->companyRepo->update($id, $request->toArray());
                $request->impossible_area_id = json_decode($request->impossible_area_id);
                //update area relationship, genre relationship
                $company->getAreas()->sync($request->area_id);
                $company->getGenres()->sync($request->genre_id);
                $company->getStickings()->sync($request->sticking_id);
                $company->getPrefs()->sync($request->pref);
                $company->getImpossibleAreas()->sync($request->impossible_area_id);
                if ($request->hasFile('images')) {
                    $files = $request->file('images');
                    $this->companyRepo->upImage($files, '/uploads/company/' . date('m-Y') . '/', '1',  $company->id, 0);
                }
                if ($request->hasFile('main_img')) {
                    $main_img = $request->file('main_img');
                    $this->companyRepo->upImage($main_img, '/uploads/company/' . date('m-Y') . '/', '1',  $company->id, 1);
                }

                $request->company_id = json_decode($request->company_id);
                
                RelatedCompany::select('*')->where('company_id', $id)->delete();
                
               
                foreach ($request->company_id as $id) {
                    $company->getRelateds()->create([
                        'related_id' => $id
                    ]);
                }
                

                DB::commit();
                return redirect()->route('company.index')->with(['message' => 'Update successfully', 'alert-class' => 'warning']);
            } catch (Exception $exception) {
                DB::rollback();
                dd($exception);
                return redirect()->back()->with(['message' => 'Update Fail. Please try again', 'alert-class' => 'danger']);
            }
        }

        return view($this->pathViewController . 'detail')->with([
            'company' => $company,
            'prefectures' => $prefectures,
            'genres' => $genres,
            'selectedGenres' => $selectedGenres,
            'selectedStickings' =>  $selectedStickings,
            'selectedPrefs' => $selectedPrefs,
            'selectedAreas' => $selectedAreas,
            'AreasBySelectedPrefs' => $AreasBySelectedPrefs,
            'relateds' => $relates,
            'impossibleAreas' => $impossibleAreas,
            'stickingNotSelected' => $stickingNotSelected
        ]);
    }

    public function ajax(Request $req)
    {
        if ($req->type == 'get_sticking') {
            $stickings = $this->genreRepo->getSticking($req->selectedGenres);
            $data = view('admin.ajax.sticking')->with('stickings', $stickings)->render();
            return response()->json($data, 200);
        }
    }
    public function delete(Request $request)
    {        
        DB::beginTransaction();
            try {
                $company = $this->companyRepo->find($request['id']);
                RelatedCompany::select('*')->where('company_id', $request['id'])->delete();
                Office::select('*')->where('company_id', $request['id'])->delete();
                Review::select('*')->where('company_id', $request['id'])->delete();
                $company->getAreas()->detach();
                $company->getGenres()->detach();
                $company->getStickings()->detach();
                $company->getPrefs()->detach();
                $company->getImpossibleAreas()->detach();
                $this->companyRepo->find($request['id'])->delete();                
                DB::commit();
                return back()->with(['message' => 'Delete successfully', 'alert-class' => 'danger']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Update Fail. Please try again', 'alert-class' => 'danger']);
            }
    }
    public function callCompany(Request $req)
    {
        if ($req->method() == 'POST') {
            $search = $req->search;
            if ($search == '') {
                $companies = $this->companyRepo->orderby('company_name', 'asc')->select('id', 'company_name')->limit(5)->get();
            } else { 
                $companies = $this->companyRepo->orderby('company_name', 'asc')->select('id', 'company_name')->where('company_name', 'like', '%' . $search . '%')->limit(5)->get();
            }
            $response = array();
            foreach ($companies as $company) {
                $response[] = array("value" => $company->id, "label" => $company->company_name);
            }
            return response()->json($response);
        }
    }

    public function callArea(Request $req)
    {
        if ($req->method() == 'POST') {
            $search = $req->search;
            $prefs = $req->prefs;  
            
            if (!empty($prefs)) {
                if ($search == '') {
                    $areas = $this->area->whereIn('pref', $prefs)->orderby('name', 'asc')->select('id', 'name')->limit(5)->get();
                } else {
                    $areas = $this->area->whereIn('pref', $prefs)->orderby('name', 'asc')->select('id', 'name')->where('name', 'like', '%' . $search . '%')->limit(5)->get();                
                }
            }else {
                if ($search == '') {
                    $areas = $this->area->orderby('name', 'asc')->select('id', 'name')->limit(5)->get();
                } else {
                    $areas = $this->area->orderby('name', 'asc')->select('id', 'name')->where('name', 'like', '%' . $search . '%')->limit(5)->get();                
                }
            }                        

            $response = array();
            foreach ($areas as $area) {
                $response[] = array("value" => $area->id, "label" => $area->name);
            }        
            
            return response()->json($response);
        }
    }

    public function csv(Request $request)
    {
        return view($this->pathViewController . 'csv');
    }

    public function exportCsv(Request $request)
    {
        return Excel::download(new CompanyExport, 'company.csv');
    }

    public function importCsv(Request $request)
    {
        Excel::import(new CompanyImport, $request->file);

        DB::beginTransaction();
        try {
           // Excel::import(new CompanyImport, $request->file);
            DB::commit();
            return redirect()->route('company.index')->with(['message' => 'Import successfully', 'alert-class' => 'success']);
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->with(['message' => 'Import Fail. Please try again', 'alert-class' => 'danger']);
        }
    }
}