<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            switch ($guard) {
                case 'web': $redirectTo = route('home');break;
                case 'admins': $redirectTo = route('admin.dashboard');break;
            }
        }

        if (Auth::guard($guard)->check()) {
            return redirect($redirectTo);
        }

        return $next($request);
    }
}
