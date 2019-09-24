<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening1 extends Model
{
    Protected $table = 'ref_rek_1';
    Protected $fillable = [
        'kd_rek_1',
        'nm_rek_1'
    ];
}
