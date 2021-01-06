<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatkulDosen extends Model
{
    protected $table = 'matkul_dosen';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_matkul_dosen';
    protected $fillable = [
        'id_matkul','id_dosen'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }

    public function matkul()
    {
        return $this->hasOne(Matkul::class, 'id_matkul', 'id_matkul');
    }
}
