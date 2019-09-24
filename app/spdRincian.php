<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spdRincian extends Model
{
    Protected $table = 'Ta_spd_rinc';
    Protected $fillable = ['tahun','no_spd','no_id','kd_urusan','kd_bidang','kd_unit','kd_sub','kd_prog','id_prog','kd_keg','kd_rek_1','kd_rek_2','kd_rek_3','kd_rek_4','kd_rek_5','nilai'];
}
