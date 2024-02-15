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
            $table->unsignedTinyInteger('kejujuran_etika')->nullable();
            $table->unsignedTinyInteger('kemampuan_bidang_keilmuan')->nullable();
            $table->unsignedTinyInteger('kemampuan_bahasa_asing')->nullable();
            $table->unsignedTinyInteger('kemampuan_teknologi_informasi')->nullable();
            $table->unsignedTinyInteger('kemampuan_berkomunikasi')->nullable();
            $table->unsignedTinyInteger('kemampuan_kerjasama_tim')->nullable();
            $table->unsignedTinyInteger('kedisiplinan')->nullable();
            $table->unsignedTinyInteger('kepercayaan_diri')->nullable();
            $table->unsignedTinyInteger('rasa_tanggungjawab')->nullable();
            $table->unsignedTinyInteger('kemampuan_menyampaikan_ide')->nullable();
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
