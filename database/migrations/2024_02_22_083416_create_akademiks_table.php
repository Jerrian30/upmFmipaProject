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
        Schema::create('akademiks', function (Blueprint $table) {
            $table->id();
            $table->datetime('timestamp');
            $table->string('status')->nullable(); // Misalnya: Bapak/Ibu/Sdr/i
            $table->unsignedTinyInteger('info_layanan')->nullable(); // 1. Ketersediaan, kejelasan dan kemudahan memperoleh informasi layanan
            $table->unsignedTinyInteger('suasana_ruangan')->nullable(); // 2. Suasana ruangan yang bersih dan nyaman
            $table->unsignedTinyInteger('staff_penampilan')->nullable(); // 3. Staff berpenampilan bersih dan rapih serta berperilaku sopan dan ramah
            $table->unsignedTinyInteger('ketepatan_layanan')->nullable(); // 4. Staf memiliki pengetahuan yang baik tentang layanan yang dibutuhkan
            $table->unsignedTinyInteger('staff_mudah_ditemui')->nullable(); // 5. Staf mampu memberikan pelayanan sesuai dengan SOP
            $table->unsignedTinyInteger('layanan_akademik')->nullable(); // 6. Staf menunjukkan sikap responsive dan bertanggung jawab
            $table->unsignedTinyInteger('staff_terbuka_kritik')->nullable(); // 8. Staf terbuka dengan kritik/saran
            $table->text('saran_kritik')->nullable(); // Saran/Kritik
            $table->string('program_studi')->nullable(); // Program Studi/Unit Kerja/Lainnya
            $table->string('jenis_kelamin', 10)->nullable(); // Jenis Kelamin
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akademiks');
    }
};
