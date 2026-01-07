<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notulen extends Model
{
    protected $fillable = [
        'rapat_id','pembahasan','keputusan','catatan','notulis'
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class);
    }

}