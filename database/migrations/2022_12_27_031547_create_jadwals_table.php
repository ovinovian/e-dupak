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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->string('tahap',1);
            $table->date('daftar_mulai');
            $table->date('daftar_selesai');
            $table->date('siap_mulai');
            $table->date('siap_selesai');
            $table->date('nilai_mulai');
            $table->date('nilai_selesai');
            $table->date('sidang_mulai');
            $table->date('sidang_selesai');
            $table->tinyInteger('publish')->default(0);
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
        Schema::dropIfExists('jadwals');
    }
};