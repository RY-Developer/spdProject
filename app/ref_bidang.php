<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_bidang extends Model
{
    Protected $table = 'ref_bidang';
    Protected $fillable = ['kd_urusan','kd_bidang','nm_bidang','kd_fungsi'];
}
