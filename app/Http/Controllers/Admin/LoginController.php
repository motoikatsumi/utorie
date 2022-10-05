<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\EUserType;

class LoginController extends Controller
{

	public function login(Request $request)
	{
			$method = $request->method();			
			
	    if( $request->isMethod('post')) {
	    	$request->validate([
	            'username' => 'required',
	            'password' => 'required'
				]);
			
				if (\Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password, 'status' => 1], true)) {
						// check user role
						$user = User::with('roles')->find(Auth::user()->id);
        		$user_role = $user->hasRole(EUserType::ADMIN);
					
						switch($user_role) {
							case EUserType::ADMIN:
								// redirect to admin managerment
								return redirect()->intended(route('admin.dashboard'));
								break;
							default:
								\Auth::logout();
								return redirect()->intended(route('admin.login'))->withErrors(['errors' => 'アカウントが存在しないかパスワードが間違っています。']);
						}
				} else {
					return redirect(route('admin.login'))->withErrors(['errors' => 'アカウントが存在しないかパスワードが間違っています。']);
				}
      }

	    return view('admin.pages.auth.login');
	}

	public function logout() {
		\Auth::logout();
		return redirect()->intended(route('admin.login'));
	}

	public function logoutTechnician() {
		auth('technician')->logout();
		return redirect()->intended(route('admin.login'));
	}
}
