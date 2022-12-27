<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    
    protected $table = 'peserta';
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'jk',
        'alamat',
        'role',
        'tempat_lahir',
        'tanggal_lahir',
        'nohp',
        'golongan',
        'jabatan',
        'opd_id',
    ];
}
