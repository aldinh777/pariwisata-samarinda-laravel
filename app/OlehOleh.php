<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oleholeh extends Model
{
    protected $table = 'oleh_oleh';

    protected $fillable = [
        'name', 'slug', 'deskripsi_singkat', 'deskripsi', 'gambar'
    ];
}
