<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function attemptLogin(LoginRequest $request)
    {
        $params = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if(Auth::attempt($params)) {
            return redirect()->route('home');
        }
        return redirect()->route('user.show-form-login')
            ->withErrors(__('auth.failed'))
            ->withInput();
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect()->route('user.show-form-login');
    }
}
