<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {   
        if (!auth()->check()) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect('login');
        }

        // Jika pengguna sudah login, lanjutkan ke rute yang diminta
        return $next($request);
    }
}
