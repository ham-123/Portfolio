<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->is_role == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Vous n\'avez pas les autorisations nécessaires pour accéder à cette page.');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
