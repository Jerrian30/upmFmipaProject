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
        Schema::create('pengguna_lulusans', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp')->nullable();
            $table->string('program_studi')->nullable();
            $table->text('kejujuran_etika')->nullable();
            $table->text('kemampuan_bidang_keilmuan')->nullable();
            $table->text('kemampuan_bahasa_asing')->nullable();
            $table->text('kemampuan_teknologi_informasi')->nullable();
            $table->text('kemampuan_berkomunikasi')->nullable();
            $table->text('kemampuan_kerjasama_tim')->nullable();
            $table->text('kedisiplinan')->nullable();
            $table->text('kepercayaan_diri')->nullable();
            $table->text('rasa_tanggungjawab')->nullable();
            $table->text('kemampuan_menyampaikan_ide')->nullable();
            $table->text('keunggulan_alumni')->nullable();
            $table->text('kelemahan_alumni')->nullable();
            $table->text('kualitas_alumni')->nullable();
            $table->text('kompetensi_penting')->nullable();
            $table->text('saran_pemantapan_kompetensi')->nullable();
            $table->text('saran_lembaga_unib')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna_lulusans');
    }
};
