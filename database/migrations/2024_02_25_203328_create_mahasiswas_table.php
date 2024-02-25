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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->char('jenis_kelamin', 1);
            $table->string('program_studi');
            $table->year('angkatan_tahun_masuk'); // Menambahkan kolom angkatan/tahun masuk
            $table->unsignedTinyInteger('semester_saat_ini'); // Menambahkan kolom semester saat ini
            $table->decimal('ipk', 3, 2)->nullable(); // Menambahkan kolom IPK
            // Menambahkan kolom untuk item survey dengan asumsi penilaian numerik atau teks
            $table->unsignedTinyInteger('dosen_pembimbing_akademik')->nullable();
            $table->unsignedTinyInteger('dosen_pembina_kegiatan')->nullable();
            $table->unsignedTinyInteger('layanan_bimbingan_konseling')->nullable();
            $table->unsignedTinyInteger('reward_apresiasi_beasiswa')->nullable();
            $table->unsignedTinyInteger('materi_kuliah_jelas')->nullable();
            $table->unsignedTinyInteger('dosen_ramah_empati')->nullable();
            $table->unsignedTinyInteger('staf_akademik_kemahasiswaan')->nullable();
            $table->unsignedTinyInteger('ruang_kuliah_nyaman')->nullable();
            $table->unsignedTinyInteger('ruang_laboratorium_menunjang')->nullable();
            $table->unsignedTinyInteger('koleksi_akses_perpustakaan')->nullable();
            $table->unsignedTinyInteger('fasilitas_ibadah_olahraga_kantin')->nullable();
            $table->unsignedTinyInteger('fasilitas_internet')->nullable();
            $table->unsignedTinyInteger('fasilitas_organisasi_kemahasiswaan')->nullable();
            $table->unsignedTinyInteger('keamanan_kampus')->nullable();
            $table->unsignedTinyInteger('penanganan_keluhan_mahasiswa')->nullable();
            $table->unsignedTinyInteger('sanksi_pelanggaran_mahasiswa')->nullable();
            $table->unsignedTinyInteger('kejelasan_rencana_pembelajaran')->nullable();
            $table->unsignedTinyInteger('pengembalian_tugas')->nullable();
            $table->unsignedTinyInteger('sistem_penilaian_evaluasi')->nullable();
            $table->unsignedTinyInteger('suasana_akademik')->nullable();
            $table->unsignedTinyInteger('monitoring_kemajuan_mahasiswa')->nullable();
            $table->unsignedTinyInteger('pemahaman_minat_bakat_keluhan')->nullable();
            // Kolom untuk saran/kritik sebagai teks
            $table->text('saran_kritik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
