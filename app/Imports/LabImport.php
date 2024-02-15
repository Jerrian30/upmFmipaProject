<?php

namespace App\Imports;

use App\Models\Lab;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class LabImport implements ToModel
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

        return new Lab([
            'timestamp' => $timestamp,
            'responden_status' => $row[1],
            'info_layanan' => $row[2],
            'kebersihan_laboratorium' => $row[3],
            'sarpras_terawat' => $row[4],
            'pelayanan_staf' => $row[5],
            'terbuka_kritik_saran' => $row[6],
            'penyelesaian_persoalan' => $row[7],
            'manual_peralatan' => $row[8],
            'ketrampilan_staf' => $row[9],
            'hasil_dapat_dipertanggungjawabkan' => $row[10],
            'ketua_staf_mudah_dihubungi' => $row[11],
            'sikap_peduli_staf' => $row[12],
            'sarpras_lengkap' => $row[13],
            'saran_kritik' => $row[14],
            'program_studi' => $row[15],
            'jenis_kelamin' => $row[16],
        ]);
    }
}
