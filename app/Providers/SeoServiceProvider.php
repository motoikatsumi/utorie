<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repositories\SeoRepo;
use App\Repositories\SettingRepo;
use Illuminate\Support\Str;

class SeoServiceProvider extends ServiceProvider
{
    private $SeoRepo;
    private $SettingRepo; 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register(){        
    }

    public function boot()
    {
        //Trong Provider không get được route name bởi vậy ta get URI để define SEO;
        $this->SeoRepo = new SeoRepo();
        $currentRoute = $this->app->request->getRequestUri();
        $hasPublic = Str::contains($currentRoute, 'public');
        $seoTags = $this->SeoRepo->seoTags($currentRoute);

        //remove public
        if($hasPublic) {
            $newurl = str_replace('/public','',$currentRoute);
            redirect($newurl)->send();
        }

        //Get Sidebar Images
        $this->SettingRepo = new SettingRepo(); 
        $asideImages = $this->SettingRepo->getTheAsideImages();

        //Get GA tag
        $gaTag = $this->SettingRepo->getByOptions([
            'name' => 'ga_tags',
            'first' => false,
        ])->pluck('setting_value')->toArray()[0];
        
        
        View::share(['seo' => $seoTags, 'asideImages' => $asideImages, 'gaTag' => $gaTag]);
    }
}