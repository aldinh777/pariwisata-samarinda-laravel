<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = 'kuliner';

    protected $fillable = [
        'nama', 'slug', 'deskripsi_singkat', 'deskripsi', 'gambar'
    ];
}
