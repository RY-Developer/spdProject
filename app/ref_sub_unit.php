<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_sub_unit extends Model
{
    protected $table = 'ref_sub_unit';
    protected $fillable = [
      'id_ref_unit',
      'kd_urusan',
      'kd_bidang',
      'kd_unit',
      'kd_sub',
      'nm_sub_unit'
    ];
}
