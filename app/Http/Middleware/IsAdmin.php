<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\EUserType;
use App\Enums\EUserStatus;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::with('roles')->find(Auth::user()->id);
        $check_admin = $user->hasRole(EUserType::ADMIN);
        if ($check_admin==true) {
            return $next($request);
        }
        auth()->logout();
        return redirect()->route('admin.login');
        // return redirect('/')->with('error','You have not admin access');
    }
}