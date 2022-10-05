<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeRequest;
use Illuminate\Http\Request;
use App\Interfaces\OfficeRepositoryInterface;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\PrefDataRepositoryInterface;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Exports\OfficeExport;
use App\Imports\OfficeImport;
use Maatwebsite\Excel\Facades\Excel;
class OfficeController extends Controller
{
    private $pathViewController = 'admin.pages.sale_office.';
    private $office;
    private $companies;
    private $prefectureRepo;

    public function __construct(OfficeRepositoryInterface $office, CompanyRepositoryInterface $companies, PrefDataRepositoryInterface $prefectures)
    {
        $this->middleware('auth');
        $this->office = $office;
        $this->companies = $companies;
        $this->prefectureRepo = $prefectures;
        view()->share([
            'title' => 'Sale office',
            'head_title' => '更新プログラム管理画面',
        ]);
    }

    public function index(Request $request)
    {
        // $companies = $this->companyRepo->where('delete_flg', 0);
        $limit = isset($request['limit']) ? $request['limit'] : $limit = Config::get('define.admin_pagination');
        $offices = $this->office->with('prefs','companies')->paginate($limit);
        return view($this->pathViewController . 'index',
            ['offices' => $offices]
        );
    }

    public function create(OfficeRequest $request)
    {
        $prefectures = $this->prefectureRepo->get();
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            // dd($request->toArray());
            try {
                $office = $this->office->create($request->toArray());
                DB::commit();
                return redirect()->route('office.index')->with(['message' => 'Create successfully', 'alert-class' => 'success']);
            } catch (Exception $exception) {
                DB::rollback();
                return view($this->pathViewController . 'create')->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        } else {
            return view($this->pathViewController . 'create')->with([
                'prefectures' => $prefectures
            ]);
        }
    }

    public function edit(OfficeRequest $request,$id)
    {
        $office = $this->office->find($id);
        $prefectures = $this->prefectureRepo->get();
        if($office->company_id) {
            $company_name = $this->companies->where('id', $office->company_id)->first()->company_name;
        }else {
            $company_name = '';
        }
        
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $office = $this->office->update($id, $request->toArray());
                DB::commit();
                return redirect()->back()->with(['message' => 'Update successfully.', 'alert-class' => 'warning']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        return view($this->pathViewController . 'detail', ['office' => $office, 'prefectures' => $prefectures, 'company_name' => $company_name]);
    }

    public function delete(OfficeRequest $request)
    {
        DB::beginTransaction();
        try {
            $office = $this->office->find($request['id'])->delete();
            DB::commit();
            return redirect()->back()->with(['message' => 'Delete successfully.', 'alert-class' => 'danger']);
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->with(['message' => 'Delete Fail. Please try again', 'alert-class' => 'danger']);
        }
        return back()->with(['message' => 'Delete successfully', 'alert-class' => 'danger']);
    }

    public function callOffice(Request $req)
    {
        if($req->method() == 'POST') {
            $search = $req->search;
            if($search == ''){
                $offices = $this->office->orderby('name','asc')->select('id','name')->limit(5)->get();
             }else{
                $offices = $this->office->orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
             }

            $response = array();
            foreach($offices as $officex){
                $response[] = array("value"=>$officex->id,"label"=>$officex->name);
            }
            return response()->json($response);
        }
    }

    public function csv(){
        return view($this->pathViewController . 'csv');
    }

    public function exportCsv(){
        return Excel::download(new OfficeExport, 'office.csv');
    }

    public function importCsv(Request $request){
        DB::beginTransaction();
        try {
            Excel::import(new OfficeImport, $request->file);
            DB::commit();
            return redirect()->route('office.index')->with(['message' => 'Import successfully', 'alert-class' => 'success']);
        } catch (Exception $exception) {                
            DB::rollback();
            return redirect()->back()->with(['message' => 'Import Fail. Please try again', 'alert-class' => 'danger']);
        }
    }
}
