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
            $table->datetime('timestamp')->nullable(); // Timestamp menjadi 'waktu'
            $table->string('email')->nullable(); // Email Address
            $table->string('nama_lengkap')->nullable(); // Nama Lengkap (Beserta Gelar)
            $table->string('jenis_kelamin', 10)->nullable(); // Jenis Kelamin
            $table->string('tempat_tanggal_lahir')->nullable(); // Tempat dan Tanggal Lahir
            $table->text('alamat')->nullable(); // Alamat Rumah
            $table->string('no_hp')->nullable(); // No. HP (Aktif WA)
            $table->string('lulusan_prodi')->nullable(); // Lulus dari Program Studi
            $table->year('angkatan')->nullable(); // Angkatan (Tahun Masuk Kuliah)
            $table->string('bulan_tahun_lulus')->nullable(); // Bulan dan Tahun Lulus

            $table->string('jalur_masuk')->nullable(); // Jalur Masuk ke UNIB
            $table->boolean('berorganisasi')->nullable(); // Apakah berorganisasi ketika mahasiswa
            $table->string('sumber_biaya')->nullable(); // Sumber biaya saat kuliah
            $table->decimal('ipk', 3, 2)->nullable(); // IPK lulusan
            $table->boolean('melanjutkan_studi')->nullable(); // Setelah lulus Sarjana, apakah melanjutkan studi lagi?
            $table->string('tempat_studi_lanjutan')->nullable(); // Jika ya, dimana melanjutkan studi
            $table->string('tahun_studi_lanjutan')->nullable(); // Tahun masuk dan tahun lulus bagi yang melanjutkan studi
            $table->text('alasan_lanjut_studi')->nullable(); // Alasan utama melanjutkan studi
            $table->string('waktu_tunggu_pekerjaan')->nullable(); // Waktu tunggu untuk mendapatkan pekerjaan
            $table->string('nama_instansi')->nullable(); // Nama instansi/perusahaan/wirausaha tempat bekerja

            $table->string('bidang_pekerjaan')->nullable(); // Bergerak di bidang apa pekerjaan/wirausaha
            $table->string('jabatan')->nullable(); // Jabatan dalam perusahaan/instansi
            $table->text('alamat_instansi')->nullable(); // Alamat perusahaan/instansi
            $table->string('no_telp_instansi')->nullable(); // Nomor telepon perusahaan/instansi
            $table->string('nama_atasan')->nullable(); // Nama atasan Langsung
            $table->string('jabatan_atasan')->nullable(); // Jabatan atasan Langsung
            $table->string('email_atasan')->nullable(); // Email atasan Langsung
            $table->text('proses_dapat_pekerjaan')->nullable(); // Proses mendapatkan pekerjaan
            $table->decimal('pendapatan_per_bulan', 15, 2)->nullable(); // Pendapatan rata-rata per bulan
            $table->string('kerja_sesuai_bidang')->nullable(); // Apakah pekerjaan sesuai dengan bidang ilmu

            $table->text('kebutuhan_institusi')->nullable(); // Kebutuhan institusi terhadap lulusan prodi
            $table->text('pertimbangan_pilih_pekerjaan')->nullable(); // Pertimbangan utama memilih pekerjaan
            $table->decimal('omset_per_bulan', 15, 2)->nullable(); // Omset rata-rata per bulan (khusus wirausaha)
            $table->boolean('pernah_bekerja_sebelumnya')->nullable(); // Apakah pernah bekerja sebelumnya? (khusus wirausaha)
            $table->string('lama_bekerja_sebelum_wirausaha')->nullable(); // Berapa lama bekerja setelah lulus sebelum memutuskan untuk wirausaha? (khusus wirausaha)
            $table->decimal('omset_rata_bulan_wirausaha', 15, 2)->nullable(); // Omset rata-rata per bulan (khusus wirausaha)
            $table->string('kompetensi_bersaing')->nullable(); // Saat baru lulus, sejauh mana mampu bersaing dengan lulusan perguruan tinggi lain?
            $table->string('kompetensi_etika')->nullable(); // Saat baru lulus, kompetensi etika
            $table->string('kompetensi_keahlian_ilmu_utama')->nullable(); // Saat baru lulus, kompetensi keahlian bidang ilmu utama
            $table->string('kompetensi_bahasa_asing')->nullable(); // Saat baru lulus, kompetensi kemampuan berbahasa asing

            $table->string('kompetensi_teknologi_informasi')->nullable(); // Saat baru lulus, kompetensi penggunaan teknologi informasi
            $table->string('kompetensi_komunikasi')->nullable(); // Saat baru lulus, kompetensi kemampuan berkomunikasi
            $table->string('kompetensi_kerjasama')->nullable(); // Saat baru lulus, kompetensi kerjasama
            $table->string('kompetensi_pengembangan_diri')->nullable(); // Saat baru lulus, kompetensi pengembangan diri
            $table->text('kriteria_lulusan_prodi')->nullable(); // Sejauh ini, menurut kriteria lulusan prodi seperti apa yang diperlukan oleh lapangan pekerjaan?
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
