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
        Schema::create('tracers', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat_rumah');
            $table->string('kode_pos');
            $table->string('no_hp_wa');
            $table->string('email');
            $table->year('tahun_masuk_kuliah');
            $table->string('program_studi');

            $table->string('bulan_tahun_lulus');
            $table->integer('lama_pendidikan');
            $table->string('kepemilikan_sertifikat_kompetensi');
            $table->string('kepemilikan_str');
            $table->string('tanggal_keluar_str')->nullable();
            $table->string('melanjutkan_pendidikan');
            $table->string('tempat_melanjutkan_pendidikan')->nullable();
            $table->string('alasan_melanjutkan_pendidikan')->nullable();
            $table->string('mengetahui_cara_melamar_pekerjaan');
            $table->integer('jumlah_perusahaan_dilamar');

            $table->string('respon_perusahaan_terhadap_lamaran');
            $table->string('bekerja');
            $table->string('nama_tempat_bekerja')->nullable();
            $table->string('jenis_instansi_bidang_usaha')->nullable();
            $table->string('jabatan_profesi')->nullable();
            $table->date('bulan_tahun_mulai_bekerja')->nullable();
            $table->integer('masa_tunggu_mendapatkan_pekerjaan')->nullable();
            $table->string('proses_mendapatkan_pekerjaan')->nullable();
            $table->date('tanggal_mulai_mencari_pekerjaan')->nullable();
            $table->string('jenis_pekerjaan')->nullable();

            $table->string('tempat_bekerja_tenaga_kesehatan')->nullable();
            $table->string('pekerjaan_sesuai_bidang_ilmu');
            $table->string('informasi_lowongan_pekerjaan')->nullable();
            $table->string('puas_dengan_pekerjaan')->nullable();
            $table->string('pertimbangan_memilih_pekerjaan')->nullable();
            $table->integer('rata_rata_pendapatan')->nullable();
            $table->string('kebutuhan_institusi_terhadap_lulusan')->nullable();
            $table->string('pendidikan_relevan_dengan_pekerjaan');
            $table->string('alasan_pendidikan_tidak_relevan')->nullable();
            $table->string('saran_praktis_untuk_pendidikan')->nullable();

            $table->string('kompetensi_diperlukan_dalam_pekerjaan')->nullable();
            $table->string('penilaian_kompetensi_etika')->nullable();
            $table->string('penilaian_keahlian_bidang_ilmu')->nullable();
            $table->string('penilaian_kemampuan_bahasa_inggris')->nullable();
            $table->string('penilaian_penggunaan_teknologi_informasi')->nullable();
            $table->string('penilaian_kemampuan_berkomunikasi')->nullable();
            $table->string('penilaian_kerjasama_dalam_tim_dan_kepemimpinan')->nullable();
            $table->string('penilaian_pengembangan_diri')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracers');
    }
};
