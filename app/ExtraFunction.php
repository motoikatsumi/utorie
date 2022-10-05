<?php

namespace App;
use App\Repositories\CompanyRepo;
use App\Models\Genre;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\PrefData;
use App\Models\Area;
use App\Models\StickingPoint;
use Illuminate\Http\Request;

class ExtraFunction
{
    private $genre;
    private $pref;
    private $area;
    private $sticking;
    // public function __construct(Genre $genre,PrefData $pref,Area $area,StickingPoint $sticking){
    //     $this->genre = $genre;
    //     $this->pref = $pref;
    //     $this->city = $area;
    //     $this->sticking = $sticking;
    // }

    public function searchTitle(Request $req,$total_company){
        try {
            $result['stickings_id'] = [];
            $result['cities_id'] = [];
            $url = explode('/', $req->url());
            if(count($url) == 4 && $url['3'] == 'search') {
                $result['meta_title'] = '全国の検索結果一覧のおすすめ人気ランキング'.$total_company.'選';                
                $result['breadcrumb'] = '';
                $result['description'] = '全国の不動産・住宅会社の検索結果の特徴、メリット・デメリットなどの情報もふまえて、あなたにピッタリな店舗を見つけましょう！';                
                return $result;
            }
            if($url[3]=='search' && str_contains($url[4],'city') == true){            
                return 'noresult';
            }else {
                
                $breadcrumb='';
                $city = [];
                $base_url = url('/').'/search/';
                $this->genre = new Genre();
                $this->pref = new PrefData();
                $this->city = new Area();
                $this->sticking = new StickingPoint();
                $genreUrl = $this->genre->where('url_text',$req->genre)->first();            

                $prefUrl_origin = isset($genreUrl) ? $this->pref->where('url_text',$req->pref)->first() : $this->pref->where('url_text',$req->genre)->first();
                
                //nếu có genre
                $breadcrumb .= $genreUrl ? '<li class="breadcrumb--genre"><a href="'.$base_url.$genreUrl['url_text'].'">'.$genreUrl['name'].'</a></li>':'';
                //pref thì chắc chắn có (hoặc ko)
                if($prefUrl_origin) $breadcrumb .= '<li class="breadcrumb--pref"><a href="'.$base_url.$prefUrl_origin['url_text'].'">'.$prefUrl_origin['name'].'</a></li>';
                $arr_params['pref'] = isset($prefUrl_origin) ? $prefUrl_origin['url_text']:'';
                $arr_params['genre'] = isset($genreUrl) ? $genreUrl['url_text']:'';
                $arr_params['pref_id'] = isset($prefUrl_origin) ? $prefUrl_origin['id']:'';
                $arr_params['genre_id'] = isset($genreUrl) ? $genreUrl['id']:'';
                $arr_params['pref_jp'] = isset($prefUrl_origin) ? $prefUrl_origin['name']:'';
                $arr_params['genre_jp'] = isset($genreUrl) ? $genreUrl['name']:'';

                $prefUrl = $prefUrl_origin ? '('.$prefUrl_origin['name'].')' : '';
                $genreURL_origin = $genreUrl ? $genreUrl['name'] : '';
                $genreUrl = $genreUrl ? $genreUrl['name'].'の検索結果一覧' : 'の検索結果一覧';

                $sticking_param = str_contains($req->url(),'sticking')==true ? end($url) : '';

                // dd($req->url());
                $city_param = str_contains($req->url(),'city')==true && $sticking_param !='' ? array_slice($url, -2)[0] : (($sticking_param == '' && Str::of($req)->contains('city')==true) ? end($url) : '');
                $cityUrl=$stickingUrl=$stickingMeta='';

                //truy vấn city và sticking point theo parameters
                $arr_params['city'] = [];
                if(str_contains($req->url(),'city')){
                    foreach (explode('--',$city_param) as $key => $item) {
                        $city[]=explode('_',$item)[1];
                    }
                    $city_arr = $city ? $this->city->whereIn('id',$city)->get()->toArray() : '';
                    
                    foreach ($city_arr as $key => $item) {
                        $cityUrl .= $cityUrl=='' ? $item['name'] : '・'.$item['name'];
                        $breadcrumb .= '<li class="breadcrumb--city"><a href="'.$base_url.$prefUrl_origin['url_text'].'/'.'city_'.$item['id'].'">'.$item['name'].'</a></li>';
                        $breadcrumb =  isset($city_arr[++$key])?$breadcrumb:$breadcrumb;
                        $arr_params['city'][]=$item['name'];
                    }
                }
                $arr_params['stickingwithcat'] = [];
                $arr_params['stickingurl'] = '';
                if(str_contains($req->url(),'sticking')){
                    //dd($sticking_param);
                    $arr_params['stickingurl'] = $sticking_param;
                    foreach (explode('--',$sticking_param) as $key => $item) {
                        $sticking[]=explode('_',$item)[1];
                    }                
                    $result['stickings_id'] = $sticking;
                    $sticking_arr = $sticking ? $this->sticking->whereIn('id',$sticking)->with('GenreCat')->get()->toArray() : [];                
                    foreach ($sticking_arr as $key => $item) {
                        $stickingUrl .= $stickingUrl=='' ? $item['name'] : '｜'.$item['name'];
                        $stickingMeta .= $stickingMeta=='' ? $item['name'] : '・'.$item['name'];
                        $breadcrumb .= '<li class="breadcrumb--sticking">'.$item['name'].'</li>';
                        
                        $arr_params['sticking'][]=$item['name'];
                    }                
                    
                    //gộp theo cat;
                    $stickingxs = $sticking_arr;
                    foreach ($stickingxs as $key => $stickingbm) {
                        $catid = $stickingbm['stickingpoint_cat'];
                        if ($catid) {
                            $stickingxs[$key]['genre_cat_name'] = $stickingbm['genre_cat']['name'];
                        } else {
                            $stickingxs[$key]['genre_cat_name'] = '';
                        }
                    }
                    $arr_params['stickingwithcat'] = collect($stickingxs)->sortBy('stickingpoint_cat')->groupBy('genre_cat_name')->toArray();
                }
                // dd($cityUrl,$prefUrl,$genreUrl,$stickingUrl);
                //title có nhiều trường hợp đây là trường hợp đầy đủ  : $city$・$city$($prefecture$)の$genre$の検索結果一覧（$sticking1$｜$sticking2$｜$sticking3$ | $sticking4$｜$sticking5$｜$sticking6$）
                $stickingUrl = $stickingUrl!='' ?'（'.$stickingUrl.'）':'';
                
                $result['title'] = $cityUrl.$prefUrl.$genreUrl.$stickingUrl;
                
                //nếu chỉ có pref, pref lúc này ko có dấu (.)   
                if(!isset($prefUrl_origin['name']) && $stickingUrl == '' &&  $cityUrl == '') {
                  //  return 'noresult';
                }
                if($stickingUrl == '' &&  $cityUrl == '' && $genreUrl == 'の検索結果一覧') {
                    $result['title'] = $prefUrl_origin['name'].'の検索結果一覧';                
                }

                // đây là kiểu của thẻ meta title : $city$・$city$($prefecture$)の$sticking1$・$sticking2$・$sticking3$の$genre$のおすすめ人気ランキングX選
                if($cityUrl == '' && $prefUrl_origin) $prefUrl = $prefUrl_origin['name'];
                $result['meta_title'] = $cityUrl.$prefUrl.'の'.$stickingMeta.'の'.$genreUrl.'のおすすめ人気ランキング'.$total_company.'選';
                //vì có nhiều thành phần có thể rỗng nên sẽ dư dấuの
                $result['meta_title'] = str_replace("ののの", "の",$result['meta_title']);
                $result['meta_title'] = str_replace("のの", "の",$result['meta_title']);

                // $result['breadcrumb'] = str_replace(" >  > ", " > ", $genreURL_origin.' > '.$prefUrl_origin['name'].($cityUrl ? ' > '.$cityUrl:'').($stickingMeta ? ' > '.$stickingMeta:''));
                $result['breadcrumb'] = $breadcrumb;

                $cityUrl!=''?$cityUrl.'、':'';
                $genreUrl!=''?'の'.$genreUrl:'';
                //định dạng của description  $city$・$city$($prefecture$)、$sticking1$・$sticking2$・$sticking3$の$genre$の検索結果一覧（$$件）です。$area$の$genre$の特徴、メリット・デメリットなどの情報もふまえて、あなたにピッタリな店舗を見つけましょう！
                $result['description'] = $cityUrl.$stickingUrl.$genreUrl.'の検索結果一覧（'.$total_company.'件）です。'.$cityUrl.$genreUrl.'の特徴、メリット・デメリットなどの情報もふまえて、あなたにピッタリな店舗を見つけましょう！';
                $result['breadcrumb'] = str_replace("・ >", "・",$result['breadcrumb']);
                $result['breadcrumb'] = str_replace("・・", " > ",$result['breadcrumb']);
                $result['breadcrumb'] = rtrim($result['breadcrumb'], '・');
                $result['arr_params'] = $arr_params;
                $result['cities_id'] = $city;
                return $result;
            }            
        } catch (\Throwable $th) {
            return 'noresult';
        }
    }
}
