<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatkulMahasiswa extends Model
{
    protected $table = 'matkul_mahasiswa';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_matkul_mahasiswa';
    protected $fillable = [
        'id_matkul','id_mahasiswa'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function matkul()
    {
        return $this->hasOne(Matkul::class, 'id_matkul', 'id_matkul');
    }

    // public function dosen()
    // {
    //     return $this->belongsTo(Dosen::class, 'id_matkul', 'id_matkul');
    // }
}
