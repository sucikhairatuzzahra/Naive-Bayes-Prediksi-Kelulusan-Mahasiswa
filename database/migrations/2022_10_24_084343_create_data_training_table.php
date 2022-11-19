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
        Schema::create('data_training', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->enum('jurusan_sekolah', ['ipa', 'ips', 'bahasa', 'rpl', 'tkj', 'multimedia']);
            $table->enum('prodi', ['mi', 'tkom', 'trpl']);
            $table->double('ipk');
            $table->enum('ekonomi', ['atas', 'menengah', 'bawah']);
            $table->enum('keterangan', ['lulus_tepat_waktu', 'lulus_terlambat']);
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
        Schema::dropIfExists('data_training');
    }
};
