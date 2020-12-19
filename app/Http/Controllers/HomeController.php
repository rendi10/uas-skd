<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function adminHome()
    {
        // dd($auth);
        return view('pages.admin.home');
    }

    public function dosenHome()
    {
        return view('pages.dosen.home');
    }

    public function mahasiswaHome()
    {
        // dd(auth()->user());
        return view('pages.mahasiswa.home');
    }
}
