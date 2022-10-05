<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Interfaces\ReviewRepositoryInterface;
use App\Interfaces\OfficeRepositoryInterface;
use App\Interfaces\CompanyRepositoryInterface;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Exports\ReviewExport;
use App\Imports\ReviewImport;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class ReviewController extends Controller
{
    private $pathViewController = 'admin.pages.review.';
    private $review;
    private $company;
    private $office;
    public function __construct(ReviewRepositoryInterface $review, OfficeRepositoryInterface $office, CompanyRepositoryInterface $company)
    {
        $this->middleware('auth');
        $this->office = $office;
        $this->review = $review;
        $this->company = $company;
        view()->share([
            'title' => 'Review',
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
        // $companies = $this->companyRepo->where('delete_flg', 0);
        $limit = isset($request['limit']) ? $request['limit'] : $limit = Config::get('define.admin_pagination');

        $reviews = $this->review->with('company')->orderBy('id', 'ASC')->paginate($limit);
        // dd($reviews->toArray());
        return view(
            $this->pathViewController . 'index',
            ['reviews' => $reviews]
        );
    }

    public function create(ReviewRequest $request)
    {
        if ($request->isMethod('POST')) {
            //dd($request);
            DB::beginTransaction();
            try {
                $review = $this->review->create($request->toArray());
                $company = $this->company->reviewAverage($request->company_id);
                DB::commit();
                if ($request->type)
                    return redirect()->back();
                return redirect()->route('review.index')->with(['message' => 'Create successfully', 'alert-class' => 'success']);
            } catch (Exception $exception) {
                DB::rollback();
                // if ($request->ajax()) 
                //     return response()->json('false', 500);
                return view($this->pathViewController . 'create')->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        } else {
            return view($this->pathViewController . 'create');
        }
    }

    public function edit(ReviewRequest $request, $id)
    {
        $review = $this->review->find($id);

        if ($review->company_id) {
            $company_name = $this->company->where('id', $review->company_id)->first()->company_name;
        } else {
            $company_name = '';
        }

        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            //dd($request);
            try {
                $review = $this->review->update($id, $request->toArray());
                $company = $this->company->reviewAverage($request->company_id);
                $company = $this->company->reviewAverage($id);
                DB::commit();
                return redirect()->back()->with(['message' => 'Update successfully.', 'alert-class' => 'warning']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Update Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        return view($this->pathViewController . 'detail', ['review' => $review, 'company_name' => $company_name]);
    }

    public function delete(ReviewRequest $request)
    {
        $review = $this->review->find($request['id']);
        $company_id = $review->company_id;
        $review->delete();
        $company = $this->company->reviewAverage($company_id);
        DB::beginTransaction();
        try {
            DB::commit();
            return redirect()->back()->with(['message' => 'Delete successfully', 'alert-class' => 'danger']);
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->with(['message' => 'Delete Fail. Please try again', 'alert-class' => 'danger']);
        }
        return back()->with(['message' => 'Delete successfully', 'alert-class' => 'danger']);
    }

    public function csv(Request $request)
    {
        return view($this->pathViewController . 'csv');
    }

    public function exportCsv(Request $request)
    {
        return Excel::download(new ReviewExport, 'review.csv');
    }

    public function importCsv(Request $request)
    {
        DB::beginTransaction();
        try {
            Excel::import(new ReviewImport, $request->file);
            DB::commit();
            return redirect()->route('review.index')->with(['message' => 'Import successfully', 'alert-class' => 'success']);
        } catch (Exception $exception) {            
            DB::rollback();            
            return redirect()->back()->with(['message' => 'Import Fail. Please try again', 'alert-class' => 'danger']);
        }
    }
}
