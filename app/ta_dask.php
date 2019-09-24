<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ta_dask extends Model
{
    protected $table = 'ta_dask';
    protected $fillable = [
        'id_ta_sub_unit',
        'tahun',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'kd_sub',
        'no_dpa',
        'tgl_dpa',
        'no_-dppa',
        'tgl_dppa'
    ];
}
