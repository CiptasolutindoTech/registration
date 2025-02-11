<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'alamat',
        'perusahaan',
        'email',
        'telepon',
        'asisteninstruktur',
        'instruktur',
        'instruktursenior',
        'mastertrainer',
   
    ];
}
