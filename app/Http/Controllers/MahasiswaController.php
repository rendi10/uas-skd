<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Mahasiswa;
use App\MatkulMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function matkul()
    {
            
            $id = Auth::user()->id_user;
            $data = Mahasiswa::where('id_user',$id)->first();
            
            return view('pages.mahasiswa.matkul', [
                'data'=>$data,
                ]);
    }
}
