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
        Schema::create('detail_daftars', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal');
            $table->string('klasifikasi',8);
            $table->tinyText('no_unsur',3);
            $table->string('unsur',60);
            $table->tinyText('no_sub_unsur',1);
            $table->string('sub_unsur',40);
            $table->decimal('nilai', 5, 2);            
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
        Schema::dropIfExists('detail_daftars');
    }
};