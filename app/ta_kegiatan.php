<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ta_kegiatan extends Model
{
    protected $table = 'ta_kegiatan';
    protected $fillable = [
        'id_ref_tahun',
        'id_ref_sumber_dana',
        'tahun',
        'kd_urusan',
        'kd_bidang',
        'kd_unit',
        'kd_prog',
        'id_prog',
        'kd_keg',
        'ket_kegiatan',
        'lokasi',
        'kelompok_sasaran',
        'satatus_kegiatan',
        'pagu_anggaran',
        'waktu_pelaksanaan',
        'kd_sumber'
    ];
}
