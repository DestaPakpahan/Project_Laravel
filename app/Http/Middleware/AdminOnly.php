<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user') || session('user')->role !== 'admin') {
            abort(403, 'Akses admin saja');
        }

        return $next($request);
    }
}
