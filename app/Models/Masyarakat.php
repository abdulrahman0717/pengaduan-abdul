<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Autheticatable;

class Masyarakat extends Autheticatable
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',

    ];
}
