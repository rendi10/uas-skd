<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function akun()
    {
            $data = User::all();
            return view('pages.admin.akun', ['data'=>$data]);
    }
}
