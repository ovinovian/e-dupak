<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'id_jadwal',
        'surat_pengantar',
        'laporan_kegiatan',
        'mk_tahun_lama',
        'mk_bulan_lama',
        'mk_tahun_baru',
        'mk_bulan_baru',
        'status_daftar',
    ];
}