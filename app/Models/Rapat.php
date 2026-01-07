<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $fillable = [
        'judul_rapat',
        'tanggal',
        'waktu',
        'tempat',
        'pimpinan_rapat'
    ];

    public function notulen()
    {
        return $this->hasOne(Notulen::class);
    }
}