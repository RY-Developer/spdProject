<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_tahun extends Model
{
    Protected $table = 'ref_tahun';
    Protected $fillable = [
        'kd_tahun',
        'nm_tahun'
    ];
}
