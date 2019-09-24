<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_kegiatan extends Model
{
    protected $table = 'ref_kegiatan';
    protected $fillable =
        array(
            'id_ref_program',
            'id_ref_bidang',
            'kd_urusan',
            'kd_bidang',
            'kd_prog',
            'kd_keg',
            'ket_kegiatan'
        );
}
