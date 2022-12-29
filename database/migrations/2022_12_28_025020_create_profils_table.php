<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nik');
            $table->string('nip');
            $table->string('karpeg');
            $table->string('t_lahir');
            $table->date('tgl_lahir');
            $table->tinyInteger('jk');
            $table->string('alamat');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('tmt_pangkat');
            $table->string('jabatan');
            $table->string('jenjang_jabatan');
            $table->string('jenjang_tingkat_jabatan');
            $table->string('tmt_jabatan');
            $table->string('mk_tahun_lama');
            $table->string('mk_bulan_lama');
            $table->string('mk_tahun_baru');
            $table->string('mk_bulan_baru');
            $table->string('unit_kerja');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
};