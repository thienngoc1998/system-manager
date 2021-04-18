<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
//    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function attemptLogin(LoginRequest $request)
    {
        $params = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if(Auth::guard('admins')->attempt($params)) {
           return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.show-form-login')
            ->withErrors(__('auth.failed'))
            ->withInput();
    }

    public function logout(Request $request) {
        Auth::guard('admins')->logout();

        return redirect()->route('admin.show-form-login');
    }
}
