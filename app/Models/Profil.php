<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = "profil";

    protected $fillable = [
        'id_user',
        'nik',
        'nip',
        'karpeg',
        't_lahir',
        'tgl_lahir',
        'jk',
        'alamat',
        'pangkat',
        'golongan',
        'tmt_pangkat',
        'jabatan',
        'jenjang_jabatan',
        'jenjang_tingkat_jabatan',
        'tmt_jabatan',
        'mk_tahun_lama',
        'mk_bulan_lama',
        'mk_tahun_baru',
        'mk_bulan_baru',
        'unit_kerja',
        'foto',
    ];
}