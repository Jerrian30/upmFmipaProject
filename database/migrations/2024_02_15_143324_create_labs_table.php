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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('responden_status')->nullable();
            $table->unsignedTinyInteger('info_layanan')->nullable();
            $table->unsignedTinyInteger('kebersihan_laboratorium')->nullable();
            $table->unsignedTinyInteger('sarpras_terawat')->nullable();
            $table->unsignedTinyInteger('pelayanan_staf')->nullable();
            $table->unsignedTinyInteger('terbuka_kritik_saran')->nullable();
            $table->unsignedTinyInteger('penyelesaian_persoalan')->nullable();
            $table->unsignedTinyInteger('manual_peralatan')->nullable();
            $table->unsignedTinyInteger('ketrampilan_staf')->nullable();
            $table->unsignedTinyInteger('hasil_dapat_dipertanggungjawabkan')->nullable();
            $table->unsignedTinyInteger('ketua_staf_mudah_dihubungi')->nullable();
            $table->unsignedTinyInteger('sikap_peduli_staf')->nullable();
            $table->unsignedTinyInteger('sarpras_lengkap')->nullable();
            $table->text('saran_kritik')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labs');
    }
};
