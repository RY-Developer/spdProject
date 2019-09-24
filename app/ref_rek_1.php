<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_rek_1 extends Model
{
    Protected $table = 'ref_rek_1';
    Protected $fillable = ['kd_rek_1','nm_rek_1'];
    
    Public function ref_rek_2()
    {
        $this->hasMany(\App\ref_rek_2::class)->with(id);
    }
}
