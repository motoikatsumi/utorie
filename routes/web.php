<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['prefix' => '/', 'namespace' => 'Front'], function () {
    Route::fallback('GeneralController@notfound');

    Route::group(['prefix' => '/'], function () {
        Route::match(['get', 'post'], '/', 'HomeController@index')->name('front.home.index');
    });
    Route::group(['prefix' => '/ajax'], function () {
        Route::match(['get', 'post'], '/', 'HomeController@ajax')->name('front.home.ajax');
    });
    Route::group(['prefix' => 'contact'], function () {
        Route::match(['get', 'post'], '/', 'ContactController@index')->name('front.contact');
        Route::get('/thanks', function () {
            return View('front.pages.contact.thanks');
        })->name('front.contact.thanks');
    });
    Route::group(['prefix' => 'catalog'], function () {
        Route::match(['get', 'post'], '/', 'CatalogController@index')->name('front.catalog.index');
        Route::get('/mansion', function () {
            return View('front.pages.catalog.mansion');
        })->name('front.catalog.mansion.index');
        Route::get('/thanks', function () {
            return View('front.pages.catalog.thanks');
        })->name('front.catalog.thanks');

        Route::match(['post'], '/callCity', 'CatalogController@callCity')->name('front.catalog.callCity');
    });

    Route::match(['get', 'post'], '/company/{id}', 'CompanyController@index')->name('front.company');

    Route::match(['get'], '/company/{id}/reviews-thanks', 'CompanyController@index')->name('front.company.reviewthanks');

    // Route::match(['get', 'post'], '/company/{id}', 'CompanyController@createReview')->name('front.company.createReview');

    Route::get('about', function () {
        return View('front.pages.about.index');
    })->name('front.about');

    Route::get('privacy-policy', function () {
        return View('front.pages.privacy-policy.index');
    })->name('front.privacy-policy');
    Route::match(['get', 'post'], '/search', 'SearchController@index')->name('front.search.index');
    Route::group(['prefix' => '/search/{genre?}/{pref?}/{city?}/{sticking?}'], function () {
        Route::match(['get', 'post'], '/', 'SearchController@by')->name('front.search.by');
    });
    Route::get('regulation', function () {
        return View('front.pages.regulation.index');
    })->name('front.regulation');
    Route::get('sitemap', function () {
        return View('front.pages.sitemap.index');
    })->name('front.sitemap');
    Route::get('404', function () {
        return View('front.pages.404.index');
    })->name('front.404');
});
