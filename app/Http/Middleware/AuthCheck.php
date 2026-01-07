<?php

namespace App\Http\Middleware;

use Closure;

class AuthCheck
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('user')) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
