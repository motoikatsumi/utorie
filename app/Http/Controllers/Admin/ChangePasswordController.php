<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;

class ChangePasswordController extends Controller {

  private $pathViewController = 'admin.pages.changepw.';
  public function __construct() {
    
  }  
  public function index(Request $request)
  {       
      if($request->method() == 'POST') {
        $user = Auth::user();
    
        $userPassword = $user->password;
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'パスワードが一致しません']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('admin.changepw')->with(['message' => 'Change Password successfully', 'alert-class' => 'success']);
        
    }
    else {
        return view($this->pathViewController . 'index');
    }
  }
}