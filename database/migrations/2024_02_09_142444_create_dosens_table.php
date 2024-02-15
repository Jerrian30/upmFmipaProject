<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp')->nullable();
            $table->string('program_studi')->nullable();
            $table->unsignedTinyInteger('konsistensi_pimpinan')->nullable();
            $table->unsignedTinyInteger('efektivitas_pembagian_tugas')->nullable();
            $table->unsignedTinyInteger('kebijakan_pimpinan')->nullable();
            $table->unsignedTinyInteger('pengelolaan_sdm')->nullable();
            $table->unsignedTinyInteger('ketersediaan_fasilitas_sarana')->nullable();
            $table->unsignedTinyInteger('fasilitas_penelitian_pengabdian')->nullable();
            $table->unsignedTinyInteger('suasana_perkuliahan')->nullable();
            $table->unsignedTinyInteger('kesempatan_pengembangan_karir')->nullable();
            $table->unsignedTinyInteger('pembagian_beban_kerja')->nullable();
            $table->unsignedTinyInteger('kepuasan_kesejahteraan_dosen')->nullable();
            $table->string('status_responden')->nullable();
            $table->text('ketersediaan_dana_pengembangan')->nullable();
            $table->text('saran_kritik')->nullable();
            $table->string('proyeksi_vmts')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluasi_dosen');
    }
};
