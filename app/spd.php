<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spd extends Model
{
    Protected $table = 'ta_spd';
    Protected $fillable = ['tahun','no_spd','kd_urusan','kd_bidang','kd_unit','kd_sub','tgl_spd','nama_pptk','nip_pptk','uraian','nm_penandatanganan', 'nip_penandatangan','jbt_penandatangan'];
}
