<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingSpace extends Model
{
    protected $table = 'working_space';

    protected $fillable = [
        'name', 'slug', 'alamat', 'jam_buka', 'deskripsi', 'gambar'
    ];
}
