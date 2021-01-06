<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_matkul';
    protected $fillable = [
        'nama','is_aktif'
    ];

    public function matkul()
    {
        return $this->belongsTo(MatkulDosen::class);
    }
    public function matkulM()
    {
        return $this->belongsTo(MatkulMahasiswa::class);
    }
}
