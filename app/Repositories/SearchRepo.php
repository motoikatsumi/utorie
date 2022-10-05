<?php
namespace App\Repositories;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\PrefData;
use App\Models\StickingPoint;
use App\Models\Genre;
use App\Models\Area;
use App\Models\ImpossibleArea;
use App\Repositories\BaseRepo as BaseRepo;

class SearchRepo extends BaseRepo
{    
    private $genre;
    private $area;
    private $pref;
    private $sticking;
    private $impossibleArea; 
    private $impossibleAreasCompany;
    public function __construct(Genre $genre, Area $area, PrefData $pref, StickingPoint $sticking, ImpossibleArea $impossibleArea)
    {
        $this->area = $area;
        $this->genre = $genre;
        $this->pref = $pref;
        $this->sticking = $sticking; 
        $this->impossibleArea = $impossibleArea;        
        parent::__construct();
    }
    
    public function model()
    {
        return Company::class;
    }

    public function isBelongTo($params) {
        if(Str::of($params)->contains('city')){
            //return ID of cities;
            $params = explode('--', $params);
            $ids = [];
            foreach($params as $para) {
                $ids[] = explode('_', $para)[1];
            }
            $ids = array_unique($ids);
            if(in_array(1, $ids)){               
                $ids = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
            }
            if(in_array(151, $ids)){                
                $ids = [151, 152, 153, 154, 155, 156];
            }
            if(in_array(324, $ids)){                
                $ids = [324, 325, 326, 327, 328, 329, 330, 331, 332, 333, 334];
            }
            if(in_array(384, $ids)){                
                $ids = [384, 385, 386, 387, 388, 389, 390];
            }
            if(in_array(1381, $ids)){                
                $ids = [433, 434, 435, 436, 437, 438, 439, 440, 441, 442, 443, 444, 445, 446, 447, 448, 449, 450, 451, 452, 453, 454, 455];
            }
            if(in_array(492, $ids)){                
                $ids = [492, 493, 494, 495, 496, 497, 498, 499, 500, 501, 502, 503, 504, 505, 506, 507, 508, 509, 510];
            }
            if(in_array(511, $ids)){                
                $ids = [511, 512, 513, 514, 515, 516, 517, 518];
            }
            if(in_array(519, $ids)){                
                $ids = [519, 520, 521, 522];
            }
            if(in_array(546, $ids)){                
                $ids = [546, 547, 548, 549, 550, 551, 552, 553, 554];
            }
            if(in_array(709, $ids)){                
                $ids = [709, 710, 711, 712];
            }
            if(in_array(713, $ids)){                
                $ids = [713, 714, 715, 716, 717, 718, 719, 720];
            }
            if(in_array(749, $ids)){                
                $ids = [749, 750, 751, 752, 753, 754, 755, 756, 757, 758, 759, 760, 761, 762, 763, 764, 765];
            }
            if(in_array(847, $ids)){                
                $ids = [847, 848, 849, 850, 851, 852, 853, 854, 855, 856, 857, 858];
            }
            if(in_array(879, $ids)){                
                $ids = [879, 880, 881, 882, 883, 884, 885, 886, 887, 888, 889, 890, 891, 892, 893, 894, 895, 896, 897, 898, 899, 900, 901, 902, 903];
            }
            if(in_array(904, $ids)){                
                $ids = [904, 905, 906, 907, 908, 908, 910, 911];
            }
            if(in_array(948, $ids)){                
                $ids = [948, 949, 950, 951, 952, 953, 954, 955, 956, 957];
            }
            if(in_array(1052, $ids)){                
                $ids = [1052, 1053, 1054, 1055, 1056];
            }
            if(in_array(1080, $ids)){                
                $ids = [1080, 1081, 1082, 1083, 1084, 1085, 1086, 1087, 1088, 1089];
            }
            if(in_array(1188, $ids)){                
                $ids = [1188, 1189, 1190, 1191, 1192, 1193, 1194, 1195];
            }
            if(in_array(1196, $ids)){                
                $ids = [1196, 1197, 1198, 1199, 1200, 1201, 1202, 1203];
            }
            if(in_array(1276, $ids)){                
                $ids = [1276, 1277, 1278, 1279, 1280, 1281];
            }
            // if(in_array(1381, $ids)) {
            //     $ids = [433, 434, 435, 436, 437, 438, 439, 440, 441, 442, 443, 444, 445, 446, 447, 448, 449, 450, 451, 452,
            //             453, 454, 455, 456, 457, 458, 459, 460, 461, 462, 463, 464, 465, 466, 467, 468, 469, 470, 471, 472,
            //             473, 474, 475, 476, 477, 478, 479, 480, 481, 482, 483, 484, 485, 486, 487, 488, 489, 490, 491
            //             ];
            // }
            $area_res = $this->getCompanyByAreaId($ids);            
            //returns companies
            return $area_res;            
            
        }elseif(Str::of($params)->contains('sticking')){
            //return ID of cities;
            $params = explode('--', $params);
            $ids = [];
            foreach($params as $para) {
                $ids[] = explode('_', $para)[1];
            }
            $ids = array_unique($ids);
            //returns companies
            return $this->getCompanyByStickingId($ids);
        }else {
            if($this->genre->get()->contains('url_text', $params)) {
                //be sure genre modals;
                return $this->getCompanyByGenreUrl($params);
            }
            if($this->pref->get()->contains('url_text', $params)) {
                //be sure pref modals;
                return $this->getCompanyByPrefUrl($params);
            }
        }
    }

    public function getGenreCodeBySticking($stickParams = []) {
        //sticking use ID;  
        $genreBySticks = StickingPoint::whereIn('id', explode(',', $stickParams))->get();
        if($genreBySticks->pluck('genre_code')->first()) {
            return $genreBySticks->pluck('genre_code')->toArray();
        }
    }

    public function getCompanyByPrefUrl($prefurl) {
        $prefs = $this->pref->where('url_text', $prefurl)->get();
        if($prefs->first()) {
            $companies = $prefs->reduce(function($thung, $item) {
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung;
                }
            }, collect([]));            
            return $companies->flatten()->unique('id');
        }
    }

    public function getCompanyByPrefCode($prefcode = []) {
        $prefs = $this->pref->whereIn('pref_code', $prefcode)->get();
        if($prefs->first()) {
            $companies = $prefs->reduce(function($thung, $item) {
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung;
                }
            }, collect([]));            
            return $companies->flatten()->unique('id');
        }
    }

    public function getCompanyByGenreUrl($genre_urls) {
        $genres = $this->genre->where('url_text', $genre_urls)->get();
        if($genres->first()) {
            $companies = $genres->reduce(function($thung, $item) {
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung;
                }
            }, collect([]));            
            return $companies->flatten()->unique('id');       
        }
    }

    public function getCompanyByGenreCode($genrecodes = []) {
        $genres = $this->genre->whereIn('genre_code', $genrecodes)->get();
        if($genres->first()) {
            $companies = $genres->reduce(function($thung, $item) {
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung;
                }
            }, collect([]));            
            return $companies->flatten()->unique('id');            
        }
    }

    public function getCompanyByAreaId($area_ids = []) {
        $impossibleAreas = $this->impossibleArea->get()->pluck('area_id')->unique()->toArray();
        $areas = $this->area->whereIn('id', $area_ids)->get();        
        $this->impossibleAreasCompany = $this->impossibleArea->where('area_id', $area_ids)->get()->unique()->pluck('company_id')->toArray();        

        if($areas->first()) {
            $companies = $areas->reduce(function($thung, $item) {            
                if($item->companies->first()) {
                    return $thung->push($item->companies->whereNotIn('id', $this->impossibleAreasCompany));
                }else {
                    return $thung;
                }
            }, collect([]));            
            
            return $companies->flatten()->unique('id');
        }
    }

    public function getCompanyByAllArea() {  
        $areas = $this->area->where('name','like','%区')->get();        
        if($areas->first()) {
            $companies = $areas->reduce(function($thung, $item) {            
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung; 
                }
            }, collect([]));
            // dd($companies->flatten()->unique('id'));
            return $companies->flatten()->unique('id');            
        }
    }

    public function getCompanyByArea($area_names = []) {  
        $areas = $this->area->whereIn('name', $area_names)->get();        
        if($areas->first()) {
            $companies = $areas->reduce(function($thung, $item) {            
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung; 
                }
            }, collect([]));
            // dd($companies->flatten()->unique('id'));
            return $companies->flatten()->unique('id');            
        }
    }


    public function getCompanyByStickingId($sticking_ids = []) {  
        $stickings = $this->sticking->whereIn('id', $sticking_ids)->get();        
        if($stickings->first()) {
            $companies = $stickings->reduce(function($thung, $item) {            
                if($item->companies->first()) {
                    return $thung->push($item->companies);
                }else {
                    return $thung; 
                }
            }, collect([]));
            // dd($companies->flatten()->unique('id'));
            return $companies->flatten()->unique('id');            
        }
    }

    // public function getImages(){
    //     return $this->hasMany(Image::class,'relation_id')->where('type',1);
    // }

    // public function getImageMain(){
    //     return $this->hasMany(Image::class,'relation_id')->where([['type',1],['main',1]]);
    // }

    // public function getImageOther(){
    //     return $this->hasMany(Image::class,'relation_id')->where([['type',1],['main','!=',1]]);
    // }
}