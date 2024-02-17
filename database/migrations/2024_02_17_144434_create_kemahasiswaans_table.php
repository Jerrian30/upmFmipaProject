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
        Schema::create('kemahasiswaans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->string('status')->nullable(); // Misalnya: Bapak/Ibu/Sdr/i
            $table->unsignedTinyInteger('info_layanan')->nullable(); // 1. Ketersediaan, kejelasan dan kemudahan memperoleh informasi layanan
            $table->unsignedTinyInteger('suasana_ruangan')->nullable(); // 2. Suasana ruangan yang bersih dan nyaman
            $table->unsignedTinyInteger('staff_penampilan')->nullable(); // 3. Staff berpenampilan bersih dan rapih serta berperilaku sopan dan ramah
            $table->unsignedTinyInteger('staff_pengetahuan')->nullable(); // 4. Staf memiliki pengetahuan yang baik tentang layanan yang dibutuhkan
            $table->unsignedTinyInteger('staff_sop')->nullable(); // 5. Staf mampu memberikan pelayanan sesuai dengan SOP
            $table->unsignedTinyInteger('staff_responsive')->nullable(); // 6. Staf menunjukkan sikap responsive dan bertanggung jawab
            $table->unsignedTinyInteger('staff_dapat_dihubungi')->nullable(); // 7. Staf dapat ditemui/dihubungi dengan mudah
            $table->unsignedTinyInteger('staff_terbuka_kritik')->nullable(); // 8. Staf terbuka dengan kritik/saran
            $table->text('saran_kritik')->nullable(); // Saran/Kritik
            $table->string('jenis_kelamin', 10)->nullable(); // Jenis Kelamin
            $table->string('program_studi')->nullable(); // Program Studi/Unit Kerja/Lainnya
            $table->string('lama_bergabung')->nullable(); // Berapa lama sudah bergabung/mengenal UNIB
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemahasiswaans');
    }
};
