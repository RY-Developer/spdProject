<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ta_sub_unit extends Model
{
    protected $table = 'id_ref_sub_unit';
    protected $fillable = [
        'id_ref_sub_unit',
        'tahun',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'kd_sub',
        'nm_pimpinan',
        'nip_pimpinan',
        'jbt_pimpinan',
        'alamat',
        'ur_visi'
    ];
}
