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
        Schema::create('tracerrs', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('alamat_email');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_tanggal_lahir');
            $table->text('alamat_rumah');
            $table->string('nomor_hp');
            $table->string('lulus_dari_program_studi');
            $table->year('angkatan');
            $table->string('bulan_tahun_lulus');
            $table->string('jalur_masuk');
            $table->string('berorganisasi')->nullable();
            $table->string('sumber_biaya_kuliah');
            $table->decimal('ipk', 3, 2);
            $table->string('melanjutkan_studi')->nullable();
            $table->string('detail_lanjut_studi')->nullable();
            $table->string('periode_lanjut_studi')->nullable();
            $table->text('alasan_lanjut_studi')->nullable();
            $table->string('waktu_tunggu_pekerjaan');
            $table->string('nama_instansi')->nullable();
            $table->string('bidang_pekerjaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('alamat_instansi')->nullable();
            $table->string('telepon_instansi')->nullable();
            $table->string('nama_atasan')->nullable();
            $table->string('jabatan_atasan')->nullable();
            $table->string('email_atasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracerrs');
    }
};
