<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_dosen';
    protected $fillable = [
        'id_matkul', 'nama',
    ];

    public function matkul()
    {
        return $this->hasMany(MatkulDosen::class, 'id_dosen', 'id_dosen');
    }
}
