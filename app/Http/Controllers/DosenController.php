<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\MatkulC;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function matkul()
    {
            
            $id = Auth::user()->id_user;
            $data = Dosen::where('id_user',$id)->first();


            return view('pages.dosen.matkul', [
                'data'=>$data
                ]);
    }
}
