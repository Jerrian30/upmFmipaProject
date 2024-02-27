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
        Schema::create('kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('nama_instansi');
            $table->text('alamat_instansi');
            $table->string('email_instansi');
            $table->string('no_telepon_instansi');
            $table->string('bidang_kerjasama');
            // Menambahkan kolom penilaian sesuai dengan yang diberikan
            $table->string('program_studi')->nullable();
            $table->unsignedTinyInteger('info_layanan')->nullable();
            $table->unsignedTinyInteger('kebersihan')->nullable();
            $table->unsignedTinyInteger('respon_kebutuhan')->nullable();
            $table->unsignedTinyInteger('pendampingan_kerjasama')->nullable();
            $table->unsignedTinyInteger('manfaat_kerjasama')->nullable();
            $table->unsignedTinyInteger('kesesuaian_perjanjian')->nullable();
            $table->unsignedTinyInteger('proses_pelayanan_sop')->nullable();
            $table->unsignedTinyInteger('sosialisasi_aturan')->nullable();
            $table->unsignedTinyInteger('aplikasi_hasil_kerjasama')->nullable();
            $table->unsignedTinyInteger('sumberdaya_pendukung')->nullable();
            $table->unsignedTinyInteger('libatkan_mitra_laporan')->nullable();
            $table->text('saran_kritik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerjasamas');
    }
};
