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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->integer('nisn');
            $table->string('nama_siswa', 50);
            $table->string('jurusan', 30);
            $table->integer('kelas');
            $table->char('jk_siswa', 3);
            $table->string('alamat', 255);
            $table->string('no_telp');
            $table->string('foto_siswa')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('siswa');
    }
};
