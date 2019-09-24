<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_unit extends Model
{
    protected $table = 'ref_unit';
    protected $fillable = [
        'id_ref_bidang',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'nm_unit'
    ];
}
