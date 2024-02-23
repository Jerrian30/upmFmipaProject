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
        Schema::create('pimpinans', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('status');
            $table->unsignedTinyInteger('mudah_dihubungi')->nullable();
            $table->unsignedTinyInteger('ramah_dan_sopan')->nullable();
            $table->unsignedTinyInteger('rencana_kerja_jelas')->nullable();
            $table->unsignedTinyInteger('komitmen_vmts')->nullable();
            $table->unsignedTinyInteger('menegakkan_kebijakan')->nullable();
            $table->unsignedTinyInteger('pengelolaan_prinsip')->nullable();
            $table->unsignedTinyInteger('karakteristik_kepemimpinan')->nullable();
            $table->unsignedTinyInteger('memberikan_solusi')->nullable();
            $table->unsignedTinyInteger('terbuka_kritik_saran')->nullable();
            $table->text('saran_kritik')->nullable();
            $table->string('pimpinan_dinilai')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('program_studi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pimpinans');
    }
};
