<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_rek_2 extends Model
{
    Protected $table = 'ref_rek_2';
    Protected $fillable = ['id_ref_rek_1','kd_rek_1','kd_rek_2','nm_rek_2'];
    
    public function ref_rek_1()
    {
        $this->belongsTo(\App\ref_rek_1::class)->with(id_ref_rek_1);
    }
}
