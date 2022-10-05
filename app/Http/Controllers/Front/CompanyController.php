<?php

namespace App\Http\Controllers\Front;

use App\Repositories\FrontCompanyRepo;
use App\Repositories\PrefDataRepo;
use App\Interfaces\ReviewRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\RelatedCompany;
use App\Http\Requests\Front\Company\CompanyRequest;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    const VIEW_PATH = 'front.pages.company.';
    const ROUTE_PATH = 'front.company';
    private $companyRepo;
    private $prefRepo;
    private $basicdata;
    private $offices = [];
    private $stickings = [];
    private $relateds = [];

    public function __construct(FrontCompanyRepo $companyRepo, PrefDataRepo $prefRepo, ReviewRepositoryInterface $review)
    {
        $this->companyRepo = $companyRepo;
        $this->prefRepo = $prefRepo;
        $this->review = $review;
    }

    public function index(CompanyRequest $req, $id = null)
    {
        //check if params
        if ($req->method() == 'GET') {
            $currentRouteName = \Request::route()->getName();
            $company_area = [];
            $pref_office = [];
            $seoArr = [];
            $relateds = [];

            if ($id) {
                $alldata = $this->companyRepo->where('id', 'LIKE', $id)->with('getImages', 'getImageMain', 'getPrefs', 'getAreas', 'offices', 'getStickings', 'reviews')->first();
                if ($alldata && !$alldata['delete_flg']) {
                    $offices = $alldata->toArray()['offices'];
                    $stickings = $alldata->toArray()['get_stickings'];
                    if (count($offices)) {
                        foreach ($offices as $key => $office) {
                            $pref_id = $office['pref_id'];
                            if ($pref_id) {
                                $prefinfo = $this->prefRepo->where('id', $pref_id)->first()->toArray();
                                $offices[$key]['pref'] = $prefinfo;
                                $offices[$key]['pref_name'] = $prefinfo['name'];
                            } else {
                                $offices[$key]['pref'] = [];
                                $offices[$key]['pref_name'] = [];
                            }
                        }
                        $this->offices = collect($offices)->groupBy('pref_name')->toArray();
                        $pref_office = collect($offices)->pluck('pref_id')->unique()->toArray();
                    }
                    if (count($stickings)) {
                        foreach ($stickings as $key => $sticking) {
                            $catid = $sticking['stickingpoint_cat'];
                            if ($catid) {
                                $stickings[$key]['genre_cat_name'] = $sticking['genre_cat']['name'];
                            } else {
                                $stickings[$key]['genre_cat_name'] = '';
                            }
                        }
                        $this->stickings = collect($stickings)->sortBy('stickingpoint_cat')->groupBy('genre_cat_name')->toArray();
                    }
                    
                    //get related;
                    $related_ids = RelatedCompany::where('company_id', $id)->get()->pluck('related_id')->unique();
                    if ($related_ids) {
                        $relateds = $this->companyRepo->whereIn('id', $related_ids->toArray())->with('getImageMain')->get()->toArray();
                    }

                    if ($alldata) {
                        $company_area = $alldata->toArray()['get_prefs'];
                        $company_area = collect($company_area)->groupBy('map_area')->toArray();
                        $this->basicdata = $alldata;
                    }
                    $seoArr['title'] = $alldata['company_name'] . "の口コミ・評判・基本情報｜utorie（ウトリエ）";
                    $seoArr['meta_title'] = $alldata['company_name'] . "の口コミ・評判・基本情報｜utorie（ウトリエ）";
                    if($currentRouteName == 'front.company.reviewthanks') {
                        $seoArr['title'] = "口コミを送信しました | ".$alldata['company_name'];
                        $seoArr['meta_title'] = "口コミを送信しました | ".$alldata['company_name'];
                    }
                    $seoArr['description'] = $alldata['company_name'] . "の基本情報・特徴、口コミ・評判、メリット・デメリットなどの特集ページです。詳細をチェックして、あなたにピッタリな不動産・住宅会社なのかどうか判断しましょう！";
                    $seoArr['breadcrumb'] = $alldata['company_name'];
                    $seoArr['id'] = $id;

                    $pref_company = collect($this->basicdata->toArray()['get_prefs'])->pluck('id')->unique()->toArray();
                    return view(
                        self::VIEW_PATH . 'index',
                        [
                            'company' => $this->basicdata->toArray(),
                            'seoArr' => $seoArr,
                            'company_area' => $company_area,
                            'offices' => $this->offices,
                            'company_prefs' => array_map('intval', array_values($pref_company)),
                            'office_prefs' => array_map('intval', array_values($pref_office)),
                            'stickings' => $this->stickings,
                            'relateds' => $relateds,
                            'currentRouteName' => $currentRouteName
                        ]
                    );
                } else {
                    return redirect()->route('front.404');
                }
            }
        } else {
            DB::beginTransaction();
            try {
                $this->review->create($req->toArray());
                $this->companyRepo->reviewAverage($id);
                DB::commit();         
                       
                return redirect()->route('front.company.reviewthanks', $id)->with('reviewc', $req->toArray());
            } catch (Exception $exception) {
                DB::rollback();
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
