<?php

namespace App\Http\Controllers\Front;

use App\Enums\EImage;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\StickingPoint;
use App\Models\Genre;
use App\Models\CompanyGenre;
use App\Models\PrefData;
use App\Models\Area;
use App\Models\Image;
use App\Models\ImageOther;
use App\Repositories\SearchRepo;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\ExtraFunction;
use DB;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    const VIEW_PATH = 'front.pages.search.';
    private $companies;
    private $searchRepo;
    private $extraFunc;
    private $company, $sticking, $genre, $pref, $city, $companies_a, $companies_b, $companies_c, $companies_d;

    public function __construct(Request $req, SearchRepo $searchRepo, Company $company, StickingPoint $stickingpoint, Genre $genre, PrefData $pref, Area $area, ExtraFunction $extraFunc)
    {
        $this->searchRepo  = $searchRepo;
        $this->company = $company;
        $this->sticking = $stickingpoint;
        $this->genre = $genre;
        $this->pref = $pref;
        $this->city = $area;
        $this->extraFunc = $extraFunc;

        view()->share([
            'title' => '管理画面',
            'head_title' => '更新プログラム管理画面',
        ]);
    }

    public function index(Request $req)
    {
        if ($req->isMethod('get')) {            
            $genreParam = $req->genre;
            $prefParam = $req->pref;
            $cityParam = $req->city;
            $stickingParam = $req->sticking;
            $companies = collect([]);
            //query all company if all null;
            if (!$genreParam && !$prefParam && !$cityParam && !$stickingParam) {           
                //lấy count có reviewshow
                $companies = $this->company                
                ->withSum(['reviews as review_star' => function ($query){
                    $query->where('review_show', '=', 1);
                }], 'satisfaction')
                ->withcount(['reviews' => function ($query) {
                    $query->where('review_show', '=', 1);
                }])
                ->where([
                    ['delete_flg', 0],
                    ['display_flg', 1]
                ])->get();                
            }
            
            if ($stickingParam) {
                try {
                    $genreCodes = $this->searchRepo->getGenreCodeBySticking($stickingParam);
                    if ($genreCodes) {
                        if ($this->searchRepo->getCompanyByGenreCode($genreCodes)) {
                            $companies = $companies->push($this->searchRepo->getCompanyByGenreCode($genreCodes));
                        }
                    }
                } catch (\Throwable $error) {
                }
            }
            if ($genreParam) {
                //get genrecode by param
                try {
                    $genreCodes = $this->genre->where('url_text', $genreParam)->get()->pluck('genre_code');
                    if ($genreCodes) {
                        if ($this->searchRepo->getCompanyByGenreCode($genreCodes->toArray())) {
                            $companies = $companies->push($this->searchRepo->getCompanyByGenreCode($genreCodes));
                        }
                    }
                } catch (\Throwable $error) {
                }
            }

            //if both city and pref => city condition only;
            if ($cityParam && $prefParam) {
                try {
                    if ($this->searchRepo->getCompanyByArea($cityParam)) {
                        $cityParam = explode('_', $cityParam);
                        $companies = $companies->push($this->searchRepo->getCompanyByArea($cityParam));
                    }
                } catch (\Throwable $error) {
                }
            } else {
                if ($prefParam && !$cityParam) {
                    //get all city ids of pref;                    
                    $prefids = $this->pref->where('url_text', $prefParam)->get()->pluck('id');
                    if ($prefids->first()) {
                        $prefids = $prefids->toArray()[0];
                        $citycollect = $this->city->where('pref', $prefids)->get()->pluck('name');

                        if ($citycollect) {
                            $cityNames = $citycollect->toArray();
                            if ($this->searchRepo->getCompanyByArea($cityNames)) {
                                $companies->push($this->searchRepo->getCompanyByArea($cityNames));
                            }
                        }
                    }
                }
            }

            //final results;
            $this->companies = $companies->flatten()->unique('id');
            $sort = empty($req->sort) ? 1 : $req->sort;
            switch ($sort) {
                case 1:
                    $companies = $this->companies->sortBy([
                        ['display_priority', 'asc'],
                        ['review_star', 'desc'],
                        ['home_page', 'asc'],
                        ['updated_at', 'desc'],
                    ]);
                    break;
                case 2:
                    $companies = $this->companies->sortBy([
                        ['review_star', 'desc'],
                        ['display_priority', 'asc'],
                        ['home_page', 'asc'],
                        ['updated_at', 'desc'],
                    ]);                    
                    break;
                case 3:
                    $companies = $this->companies->sortBy([
                        ['reviews_count', 'desc'],
                        ['display_priority', 'asc'],
                        ['home_page', 'asc'],
                        ['review_star', 'desc'],
                        ['updated_at', 'desc'],
                    ]);                    
                    break;
                case 4:
                    $companies = $this->companies->sortBy([
                        ['updated_at', 'desc'],
                        ['review_star', 'desc'],
                        ['display_priority', 'asc'],
                        ['home_page', 'asc'],
                    ]);
            }

            $companies = $companies->paginate(Config::get('define.front_pagination'));    
            $seoArr = $this->extraFunc->searchTitle($req, count($companies));            
            return view(self::VIEW_PATH . 'index')->with([
                'companies' => $companies,
                'seoArr' => $seoArr,
                'withoutParam' => true
            ]);
        }
    }

    public function by(Request $req, $a = null, $b = null, $c = null, $d = null)
    {        
        $companies = collect([]);
        //if get all
        // if($a) {
        //     $companies_a = $this->searchRepo->isBelongTo($a);
        //     $companies = $companies->push($companies_a)->flatten()->unique('id');
        // }    
        // if($b) {
        //     $companies_b = $this->searchRepo->isBelongTo($b);
        //     $companies = $companies->merge($companies_b)->flatten()->unique('id');
        // }
        // if($c) {
        //     $companies_c = $this->searchRepo->isBelongTo($c);
        //     $companies = $companies->merge($companies_c)->flatten()->unique('id');
        // }
        // if($d) {
        //     $companies_d = $this->searchRepo->isBelongTo($d);
        //     $companies = $companies->merge($companies_d)->flatten()->unique('id');
        // }

        //if get match value only        
        try {
            if ($a) {
                //test ok
                $companies_a = $this->searchRepo->isBelongTo($a);
                $companies = $companies->push($companies_a)->flatten()->unique('id');
            }
            if ($b) {
                $this->companies_b = $this->searchRepo->isBelongTo($b)->flatten()->unique('id');
                $companies = $companies->reduce(function ($thung, $item) {
                    return $thung->push($this->companies_b->where('id', $item->id));
                }, collect([]))->flatten()->unique('id');
            }
            if ($c) {
                $this->companies_c = $this->searchRepo->isBelongTo($c);

                $companies = $companies->reduce(function ($thung, $item) {
                    return $thung->push($this->companies_c->where('id', $item->id));
                }, collect([]))->flatten()->unique('id');
            }
            if ($d) {
                $this->companies_d = $this->searchRepo->isBelongTo($d);

                $companies = $companies->reduce(function ($thung, $item) {
                    return $thung->push($this->companies_d->where('id', $item->id));
                }, collect([]))->flatten()->unique('id');
            }
        } catch (\Throwable $th) {
            return redirect()->route('front.404');
        }

        $this->companies = $companies->flatten()->unique('id');

        $companies = $this->companies;        
        $companies = $companies->where('delete_flg', 0)->where('display_flg', 1);        

        $sort = empty($req->sort) ? 1 : $req->sort;
        switch ($sort) {
            case 1:
                $companies = $this->companies->sortBy([
                    ['display_priority', 'asc'],
                    ['review_star', 'desc'],
                    ['home_page', 'asc'],
                    ['updated_at', 'desc'],
                ]);
                break;
            case 2:
                $companies = $this->companies->sortBy([
                    ['review_star', 'desc'],
                    ['display_priority', 'asc'],
                    ['home_page', 'asc'],
                    ['updated_at', 'desc'],
                ]);
                break;
            case 3:
                $companies = $this->companies->sortBy([
                    ['reviews_count', 'desc'],
                    ['display_priority', 'asc'],
                    ['home_page', 'asc'],
                    ['review_star', 'desc'],
                    ['updated_at', 'desc'],
                ]);
            case 4:
                $companies = $this->companies->sortBy([
                    ['updated_at', 'desc'],
                    ['review_star', 'desc'],
                    ['display_priority', 'asc'],
                    ['home_page', 'asc'],
                ]);
        }

        $companies = $companies->paginate(Config::get('define.front_pagination'));

        $seoArr = $this->extraFunc->searchTitle($req, count($companies));

        // dd($seoArr);
        if ($seoArr == 'noresult') {
            return redirect()->route('front.404');
        } else {
            $arrParams = $seoArr['arr_params'];
            return view(self::VIEW_PATH . 'index')->with([
                'companies' => $companies,
                'seoArr' => $seoArr,
                'arrParams' => $arrParams
            ]);
        }
    }
}
