<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kafe extends Model
{
    protected $table = 'kafe';

    protected $fillable = [
        'nama', 'slug', 'alamat', 'jam_buka', 'deskripsi', 'gambar', 'lat', 'lng'
    ];
}
