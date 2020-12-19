<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id_matkul';
    protected $fillable = [
        'nama','is_aktif'
    ];
}
