<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_entry extends Model
{
    protected $table = 'ref_entry';
    protected $fillable =
        [
            'id_ta_sub_unit',
            'tahun',
            'kd_urusan',
            'kd_bidang',
            'kd_unit',
            'kd_sub',
            'kd_penandatanganan',
            'nm_penandatanganan',
            nip_penandatanganan,
            'jbt_penandatanganan',
            'jns_dokumen'
        ];
}
