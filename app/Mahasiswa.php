<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'id_matkul', 'nama','kehadiran'
    ];

    public function matkul()
    {
        return $this->hasMany(MatkulMahasiswa::class, 'id_mahasiswa', 'id_mahasiswa');
    }
}
