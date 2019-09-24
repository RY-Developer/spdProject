<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_urusan extends Model
{
    Protected $table = 'ref_urusan';
    Protected $fillable = [
        'kd_urusan',
        'nm_urusan'
    ];
}
