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
            $table->text('konsistensi_pimpinan')->nullable();
            $table->text('efektivitas_pembagian_tugas')->nullable();
            $table->text('kebijakan_pimpinan')->nullable();
            $table->text('pengelolaan_sdm')->nullable();
            $table->text('ketersediaan_fasilitas_sarana')->nullable();
            $table->text('fasilitas_penelitian_pengabdian')->nullable();
            $table->text('suasana_perkuliahan')->nullable();
            $table->text('kesempatan_pengembangan_karir')->nullable();
            $table->text('pembagian_beban_kerja')->nullable();
            $table->text('kepuasan_kesejahteraan_dosen')->nullable();
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
