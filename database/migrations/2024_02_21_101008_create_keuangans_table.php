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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp')->useCurrent(); // Menggunakan timestamp untuk kolom waktu
            $table->string('status')->nullable(); // Status Bapak/Ibu/Sdr/i
            $table->unsignedTinyInteger('info_layanan')->nullable(); // 1. Ketersediaan, kejelasan dan kemudahan memperoleh informasi layanan
            $table->unsignedTinyInteger('suasana_ruangan')->nullable(); // 2. Suasana ruangan yang bersih dan nyaman
            $table->unsignedTinyInteger('penampilan_staff')->nullable(); // 3. Staff berpenampilan bersih dan rapih serta berperilaku sopan dan ramah
            $table->unsignedTinyInteger('pengetahuan_staff')->nullable(); // 4. Staf memiliki pengetahuan yang baik tentang layanan yang dibutuhkan
            $table->unsignedTinyInteger('pelayanan_sop')->nullable(); // 5. Staf mampu memberikan pelayanan sesuai dengan Standar Operasional Procedure (SOP)
            $table->unsignedTinyInteger('sikap_staff')->nullable(); // 6. Staf menunjukkan sikap responsive dan bertanggung jawab terhadap data yang dibutuhkan
            $table->unsignedTinyInteger('akses_staff')->nullable(); // 7. Staf dapat ditemui/dihubungi dengan mudah
            $table->unsignedTinyInteger('terbuka_kritik')->nullable(); // 8. Staf terbuka dengan kritik/saran yang disampaikan
            $table->text('saran_kritik')->nullable(); // Saran/Kritik
            $table->string('jenis_kelamin', 10)->nullable(); // Jenis Kelamin
            $table->string('program_studi')->nullable(); // Program Studi/Unit Kerja/Lainnya
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
