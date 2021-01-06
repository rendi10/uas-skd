<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function pertambahan($angka_1,$angka_2){
     $hasil_perhitungan = $angka_1 + $angka_2;
     return $hasil_perhitungan;
}
}
