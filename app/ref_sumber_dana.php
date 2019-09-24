<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_sumber_dana extends Model
{
    protected $table = 'ref_sumber_dana';
    protected $fillable = [
      'kd_sumber',
      'nm_sumber'
    ];
}
