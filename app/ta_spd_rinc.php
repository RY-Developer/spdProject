<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ta_spd_rinc extends Model
{
    protected $table = 'ta_spd_rinc';
    protected $fillable = [
        'id_ref_rek_5',
        'id_ta_kegiatan',
        'id_ta_spd',
        'tahun',
        'no_spd',
        'no_id',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'kd_sub',
        'kd_prog',
        'id_prog',
        'kd_keg',
        'kd_rek_1',
        'kd_rek_2',
        'kd_rek_3',
        'kd_rek_4',
        'kd_rek_5',
        'nilai'
    ];
}
