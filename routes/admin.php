<?php

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

 //rule

Route::match(['get', 'post'], '/', 'Admin\LoginController@login')->name('admin.login');
Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::group(['namespace' => 'Admin', 'middleware' => 'admin'] , function () {
  Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
  //seo
  Route::group(['prefix' => 'seo'], function () {
    Route::match(['get', 'post'], '/', 'SeoController@index')->name('admin.seo.index');
    Route::get('/create', 'SeoController@create')->name('admin.seo.create');
    Route::post('/create', 'SeoController@store')->name('admin.seo.store');
    Route::get('/edit/{id}', 'SeoController@edit')->name('admin.seo.edit');
    Route::post('/edit/{id}', 'SeoController@update')->name('admin.seo.edit');
    Route::delete('/delete/{id}', 'SeoController@delete')->name('admin.seo.delete');
  });

  //setting
  Route::group(['prefix' => 'setting'], function () {
    Route::match(['get', 'post'], '/', 'SettingController@index')->name('admin.setting.index');    
    Route::match(['get', 'post'], '/delete-image', 'SettingController@ajaxDeleteImage')->name('admin.setting.ajaxDel');    
  });

  //setting
  Route::group(['prefix' => 'image-aside'], function () {
    Route::match(['get', 'post'], '/', 'SettingController@imageAside')->name('admin.setting.aside');
  });

  //pref
  Route::group(['prefix' => 'pref'], function () {
    Route::match(['get', 'post'], '/', 'PrefDataController@index')->name('admin.prefdata.index');    
  });

  //area
  Route::group(['prefix' => 'area'], function () {
    Route::match(['get', 'post'], '/', 'AreaController@index')->name('admin.area.index');    
  });

  //genre
  Route::group(['prefix' => 'genre'], function () {
    Route::match(['get', 'post'], '/', 'GenreController@index')->name('admin.genre.index');    
  });

  //genre
  Route::group(['prefix' => 'sticking'], function () {
    Route::match(['get', 'post'], '/', 'StickingPointController@index')->name('admin.sticking.index');    
  });

  //change password
  Route::group(['prefix' => 'changepw'], function () {
    Route::match(['get', 'post'], '/', 'ChangePasswordController@index')->name('admin.changepw');    
  });
  
  //store
  $prefix = 'store';
  Route::prefix($prefix)->group(function () use ($prefix) {
    $controllerName = ucfirst($prefix) . 'Controller@';
    $viewName = $prefix . '.';
    Route::get('/', $controllerName . 'index')->name($viewName . 'index');
    Route::match(['GET','POST'],'/', $controllerName . 'index')->name($viewName . 'index');
    Route::match(['GET','POST'],'/create', $controllerName . 'create')->name($viewName . 'create');
    Route::match(['GET','POST'],'/detail/{id}', $controllerName . 'detail')->name($viewName . 'detail');
    Route::match(['GET','POST'],'/edit/{id}', $controllerName . 'edit')->name($viewName . 'edit');
    Route::delete('/delete/{id}', $controllerName . 'delete')->name($viewName . 'delete');
  });

  //store
  $prefix = 'company';
  Route::prefix($prefix)->group(function () use ($prefix) {
    $controllerName = ucfirst($prefix) . 'Controller@';
    $viewName = $prefix . '.';
    Route::get('/', $controllerName . 'index')->name($viewName . 'index');
    Route::match(['GET','POST'],'/', $controllerName . 'index')->name($viewName . 'index');
    Route::match(['GET','POST'],'/create', $controllerName . 'create')->name($viewName . 'create');
    Route::match(['GET','POST'],'/ajax', $controllerName . 'ajax')->name($viewName . 'ajax');
    Route::match(['GET','POST'],'/detail/{id}', $controllerName . 'detail')->name($viewName . 'detail');
    Route::match(['GET','POST'],'/edit/{id}', $controllerName . 'edit')->name($viewName . 'edit');
    Route::match(['post'], '/company/callCompany', 'CompanyController@callCompany')->name('admin.callCompany');
    Route::match(['post'], '/company/callArea', 'CompanyController@callArea')->name('admin.callArea');    
    Route::delete('/delete/{id}', $controllerName . 'delete')->name($viewName . 'delete');
    Route::get('/csv', $controllerName . 'csv')->name($viewName . 'csv');
    Route::get('/export-csv', $controllerName . 'exportCsv')->name($viewName . 'export');
    Route::post('/import-csv', $controllerName . 'importCsv')->name($viewName . 'import');
  });

    //office
    $prefix = 'office';
    Route::prefix($prefix)->group(function () use ($prefix) {
      $controllerName = ucfirst($prefix) . 'Controller@';
      $viewName = $prefix . '.';
      Route::get('/', $controllerName . 'index')->name($viewName . 'index');
      Route::match(['GET','POST'],'/', $controllerName . 'index')->name($viewName . 'index');
      Route::match(['GET','POST'],'/create', $controllerName . 'create')->name($viewName . 'create');
      Route::match(['GET','POST'],'/detail/{id}', $controllerName . 'detail')->name($viewName . 'detail');
      Route::match(['GET','POST'],'/edit/{id}', $controllerName . 'edit')->name($viewName . 'edit');
      Route::match(['post'], '/office/callOffice', 'OfficeController@callOffice')->name('admin.callOffice');
      Route::delete('/delete/{id}', $controllerName . 'delete')->name($viewName . 'delete');
      Route::get('/csv', $controllerName . 'csv')->name($viewName . 'csv');
      Route::get('/export-csv', $controllerName . 'exportCsv')->name($viewName . 'export');
      Route::post('/import-csv', $controllerName . 'importCsv')->name($viewName . 'import');
    });

    //review
    $prefix = 'review';
    Route::prefix($prefix)->group(function () use ($prefix) {
      $controllerName = ucfirst($prefix) . 'Controller@';
      $viewName = $prefix . '.';
      Route::get('/', $controllerName . 'index')->name($viewName . 'index');
      Route::match(['GET','POST'],'/', $controllerName . 'index')->name($viewName . 'index');
      Route::match(['GET','POST'],'/create', $controllerName . 'create')->name($viewName . 'create');
      Route::match(['GET','POST'],'/detail/{id}', $controllerName . 'detail')->name($viewName . 'detail');
      Route::match(['GET','POST'],'/edit/{id}', $controllerName . 'edit')->name($viewName . 'edit');
      Route::delete('/delete/{id}', $controllerName . 'delete')->name($viewName . 'delete');
      Route::get('/csv', $controllerName . 'csv')->name($viewName . 'csv');
      Route::get('/export-csv', $controllerName . 'exportCsv')->name($viewName . 'export');
      Route::post('/import-csv', $controllerName . 'importCsv')->name($viewName . 'import');
    });

});