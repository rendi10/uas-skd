<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'Admin';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'id_user', 'nama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
