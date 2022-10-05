<?php

namespace App\Providers;

use App\Repositories\StoreRepo;
use App\Interfaces\StoreRepositoryInterface;
use App\Repositories\CompanyRepo;
use App\Interfaces\CompanyRepositoryInterface;
use App\Repositories\PrefDataRepo;
use App\Interfaces\PrefDataRepositoryInterface;
use App\Repositories\GenreRepo;
use App\Interfaces\GenreRepositoryInterface;
use App\Repositories\StickingRepo;
use App\Interfaces\StickingRepositoryInterface;
use App\Repositories\OfficeRepo;
use App\Interfaces\OfficeRepositoryInterface;
use App\Repositories\ReviewRepo;
use App\Interfaces\ReviewRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // $this->app->singleton(
        //     \App\Interfaces\StoreRepositoryInterface::class,
        //     \App\Repositories\StoreRepo::class
        // );
        $this->app->bind(StoreRepositoryInterface::class, StoreRepo::class);
        $this->app->bind(SeoRepositoryInterface::class, SeoRepo::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepo::class);
        $this->app->bind(PrefDataRepositoryInterface::class, PrefDataRepo::class);
        $this->app->bind(GenreRepositoryInterface::class, GenreRepo::class);
        $this->app->bind(StickingRepositoryInterface::class, StickingRepo::class);
        $this->app->bind(OfficeRepositoryInterface::class, OfficeRepo::class);
        $this->app->bind(ReviewRepositoryInterface::class, ReviewRepo::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        //use collect with pagination
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        Paginator::useBootstrap();
        
    }
}
