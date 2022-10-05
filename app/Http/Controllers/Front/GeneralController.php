<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
class GeneralController extends Controller
{
  public function notfound(){
    return view('front.pages.404.index');
  }
}