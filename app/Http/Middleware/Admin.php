<?php

namespace App\Http\Middleware;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Closure;

class Admin
{

    // private $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && auth()->user()->roles == "admin" ){
            return $next($request);
        }
        if (Auth::check() && auth()->user()->roles == "dosen" ){
            return $next($request);
        }
        if (Auth::check() && auth()->user()->roles == "mahasiswa" ){
            return $next($request);
        }
        return redirect('/login')->with('error','Authentikasi gagal');
    }
}
