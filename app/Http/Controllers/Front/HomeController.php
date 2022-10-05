<?php

namespace App\Http\Controllers\Front;

use App\Enums\EImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\PrefDataRepositoryInterface;
use App\Interfaces\GenreRepositoryInterface;
use App\Models\Image;
use App\Models\ImageOther;
use App\Models\StickingPointCat;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const VIEW_PATH = 'front.pages.';
    const ROUTE_PATH = 'admin.home.';
    
    private $perfcetureRepo;
    private $genreRepo;    
    public function __construct(PrefDataRepositoryInterface $perfcetureRepo, GenreRepositoryInterface $genreRepo)
    {
        $this->perfcetureRepo = $perfcetureRepo;
        $this->genreRepo = $genreRepo;
    }

    public function index(Request $req)
    {
        $genres =  $this->genreRepo->get();   
        $prefs = $this->perfcetureRepo->get();        
        $asideImages = ImageOther::where('type',EImage::ASIDE)->take(3)->get();
        foreach ($asideImages as $key => $image) {
            $image_resolve[$image['id']] = $image;
        }
        $asideImages = !empty($image_resolve) ? $image_resolve : $asideImages;        
        if($req->method() == 'POST'){
            $click_type = $req->click_type;
            $dataSearch = $req->dataSearch;            
        }
        return view(self::VIEW_PATH.'index', [
            'prefs' => $prefs->toArray(),
            'genres' => $genres,
            'click_type' => $click_type ?? '',
            'dataSearch' => $dataSearch ?? ''
        ]);        
    }
    public function ajax(Request $req) {
        if ($req->ajax()) {
            if(isset($req->pref_name)){
                $output = $this->perfcetureRepo->getAreaInPrefecture($req->pref_id, null);                                
                return $output;                
            }elseif(isset($req->genere_id)){
                $sticking_points = StickingPointCat::with('getStickingPoint')->where('genre_code',$req->genere_id)->get();
                return $sticking_points;
            }else{
                $pref = $this->perfcetureRepo->get();
                return $pref;
            }
        }
    }
}
