<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatkulC extends Model
{
    protected $table = 'matkul_dosen_mahasiswa';
    protected $primaryKey = 'id_matkulDM';
    protected $fillable = [
        'id_matkul','id_dosen','id_mahasiswa'
    ];
}
