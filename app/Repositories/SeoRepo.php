<?php
namespace App\Repositories;

use App\Interfaces\SeoRepositoryInterface;
use App\Models\Seo;

class SeoRepo extends BaseRepo implements SeoRepositoryInterface
{
    public $storeRepository;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function model()
    {
        return Seo::class;
    }

    public function seoTags($currentRoute) {
        //seoTag for SEO provider;
    //     $seoPage = $this->model::select('*')->where('route', $currentRoute)->first();
    //    // dd($seoPage);
    //     $seoTop = $this->model::select('*')->where('route', '/')->first();        
        
    //     //if page dynamic.
    //     $seoPageStatus = $this->model::select('*')->where('page_status', 0)->first();  
       
    //     if(isset($seoPageStatus)){           
    //         if(str_contains($currentRoute, $seoPageStatus->toArray()['route'])) {
    //             $seoPage = $this->model::select('*')->where('page_status', 0)->first();
    //         }else {

    //         }
    //     }

    //     if(isset($seoPage)){
    //         if($seoPage['repeat_keyword_description']){
    //             $seoPage->keywords = $seoTop['keywords'];
    //             $seoPage->description = $seoTop['description'];
    //         }
    //         return $seoPage;
    //     }
    }
}