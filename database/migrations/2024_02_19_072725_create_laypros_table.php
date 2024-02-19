<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laypros', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('status')->nullable(); // Status
            $table->string('program_studi')->nullable(); // Program Studi
            $table->unsignedTinyInteger('kebersihan_ruangan')->nullable(); // Kebersihan Ruangan
            $table->unsignedTinyInteger('fasil_perkuliahan')->nullable(); // Fasilitas Perkuliahan
            $table->unsignedTinyInteger('fasil_lab')->nullable(); // Fasilitas Laboratorium
            $table->unsignedTinyInteger('info_perkuliahan')->nullable(); // Info Perkuliahan
            $table->unsignedTinyInteger('urus_transkrip')->nullable(); // Urus Transkrip
            $table->unsignedTinyInteger('urus_krs_khs')->nullable(); // Urus KRS KHS
            $table->unsignedTinyInteger('respon_keluhan')->nullable(); // Respon Keluhan
            $table->unsignedTinyInteger('penetapan_dosen')->nullable(); // Penetapan Dosen
            $table->unsignedTinyInteger('dukung_kegiatan')->nullable(); // Dukung Kegiatan
            $table->unsignedTinyInteger('dukung_studi')->nullable(); // Dukung Studi
            $table->unsignedTinyInteger('info_ilmiah')->nullable(); // Info Ilmiah
            $table->unsignedTinyInteger('ketua_berpakaian_rapi')->nullable(); // Ketua Berpakaian Rapi
            $table->unsignedTinyInteger('ketua_responsif')->nullable(); // Ketua Responsif
            $table->unsignedTinyInteger('ketua_mudah_dihubungi')->nullable(); // Ketua Mudah Dihubungi
            $table->unsignedTinyInteger('petugas_ramah')->nullable(); // Petugas Ramah
            $table->unsignedTinyInteger('petugas_it')->nullable(); // Petugas IT
            $table->text('saran_kritik')->nullable(); // Saran Kritik
            $table->string('jenis_kelamin')->nullable(); // Jenis Kelamin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laypros');
    }
};
