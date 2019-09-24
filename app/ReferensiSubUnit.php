<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferensiSubUnit extends Model
{
    Protected $table='ref_sub_unit';
    Protected $fillable=['kd_urusan','kd_bidang','kd_unit','kd_sub','nm_sub_unit'];
}
