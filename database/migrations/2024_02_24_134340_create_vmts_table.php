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
        Schema::create('vmts', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('program_studi')->nullable();
            $table->string('status_di_universitas')->nullable();
            $table->integer('lama_bergabung')->nullable(); // asumsi dalam tahun
            $table->string('mengetahui_vmts')->nullable();
            $table->string('sumber_informasi_vmts')->nullable();
            $table->string('ikut_sosialisasi_vmts')->nullable();
            $table->string('pemahaman_visi')->nullable();
            $table->string('pemahaman_misi')->nullable();
            $table->string('visi_sesuai_tuntutan_kerja')->nullable();
            $table->string('visi_realistis')->nullable();
            $table->string('misi_sesuai_tridharma')->nullable();
            $table->string('misi_tujuan_strategi_dukung_visi')->nullable();
            $table->string('vmts_dukung_atmosfer_akademik')->nullable();
            $table->string('yakin_capai_vmts')->nullable();
            $table->string('estimasi_waktu_capai_vmts')->nullable(); // dalam tahun
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vmts');
    }
};
