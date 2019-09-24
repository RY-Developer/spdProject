<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_program extends Model
{
    protected $table = 'ref_program';
    protected $fillable = [
        'id_ref_urusan',
        'kd_urusan',
        'kd_bidang',
        'kd_prog',
        'ket_program'
    ];
}
