<?php

namespace App\Imports;

use App\Models\Kerjasama;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class KerjasamaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $timestamp = Carbon::createFromTimestamp($row[0] * 86400 - 2209186799) // 25569 adalah jumlah hari dari 30 Desember 1899 ke 1 Januari 1970
        ->setTimezone('Asia/Jakarta');

        return new Kerjasama([
            'timestamp' => $timestamp,
            'nama_instansi' => $row[1],
            'alamat_instansi' => $row[2],
            'email_instansi' => $row[3],
            'no_telepon_instansi' => $row[4],
            'bidang_kerjasama' => $row[5], // Asumsi ini adalah string yang mewakili bidang kerjasama
            'program_studi' => $row[6],
            'info_layanan' => $row[7],
            'kebersihan' => $row[8],
            'respon_kebutuhan' => $row[9],
            'pendampingan_kerjasama' => $row[10],
            'manfaat_kerjasama' => $row[11],
            'kesesuaian_perjanjian' => $row[12],
            'proses_pelayanan_sop' => $row[13],
            'sosialisasi_aturan' => $row[14],
            'aplikasi_hasil_kerjasama' => $row[15],
            'sumberdaya_pendukung' => $row[16],
            'libatkan_mitra_laporan' => $row[17],
            'saran_kritik' => $row[18],
            
        ]);
    }
}
