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
            $table->string('alamat_email')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_tanggal_lahir')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('lulus_dari_program_studi')->nullable();
            $table->year('angkatan')->nullable();
            $table->string('bulan_tahun_lulus')->nullable();

            $table->string('jalur_masuk')->nullable();
            $table->string('berorganisasi')->nullable()->nullable();
            $table->string('sumber_biaya_kuliah')->nullable();
            $table->decimal('ipk', 3, 2)->nullable();
            $table->string('melanjutkan_studi')->nullable();
            $table->string('detail_lanjut_studi')->nullable();
            $table->string('periode_lanjut_studi')->nullable();
            $table->text('alasan_lanjut_studi')->nullable();
            $table->string('waktu_tunggu_pekerjaan');
            $table->string('nama_instansi')->nullable();

            $table->string('bidang_pekerjaan')->nullable();
            $table->text('jabatan')->nullable();
            $table->text('alamat_instansi')->nullable();
            $table->string('telepon_instansi')->nullable();
            $table->string('nama_atasan')->nullable();
            $table->string('jabatan_atasan')->nullable();
            $table->string('email_atasan')->nullable();
            $table->string('proses_mendapatkan_pekerjaan')->nullable();
            $table->string('pendapatan_rata_rata_per_bulan')->nullable();
            $table->string('kerja_terkait_bidang_ilmu')->nullable();

            $table->text('kebutuhan_institusi_terhadap_lulusan');
            $table->text('pertimbangan_memilih_pekerjaan')->nullable();
            $table->text('alasan_memutuskan_wirausaha')->nullable();
            $table->string('pernah_bekerja_sebelum_wirausaha')->nullable();
            $table->string('lama_bekerja_sebelum_wirausaha')->nullable(); // Dalam bulan
            $table->text('omset_rata_rata_wirausaha', 10, 2)->nullable();
            $table->string('kompetisi_dengan_lulusan_lain');
            $table->string('kompetensi_etika');
            $table->string('kompetensi_bidang_ilmu_utama');
            $table->string('kompetensi_bahasa_asing');
            
            $table->string('kompetensi_penggunaan_teknologi_informasi');
            $table->string('kompetensi_kemampuan_berkomunikasi');
            $table->string('kompetensi_kerjasama');
            $table->string('kompetensi_pengembangan_diri');
            $table->text('kriteria_lulusan_yang_diperlukan_lapangan_pekerjaan');
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
