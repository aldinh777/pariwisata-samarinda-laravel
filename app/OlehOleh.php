<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oleholeh extends Model
{
    protected $table = 'oleh_oleh';

    protected $fillable = [
        'name', 'deskripsi_singkat', 'deskripsi', 'gambar'
    ];
}
