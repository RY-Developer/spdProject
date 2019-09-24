<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ta_spd extends Model
{
    protected $table = 'ta_spd';
    protected $fillable = [
        'id_ref_editdata',
        'id_ta_sub_unit',
        'tahun',
        'no_spd',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'kd_sub',
        'tgl_spd',
        'nama_pptk',
        'nip_pptk',
        'uraian',
        'nm_penandatanganan',
        'nip_penandatanganan',
        'jbt_penandatanganan',
        'kd_edit'
    ];
}
