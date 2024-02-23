<?php

namespace App\Imports;

use App\Models\Pimpinan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class PimpinanImport implements ToModel
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

        return new Pimpinan([
            'timestamp' => $timestamp,
            'status' => $row[1],
            'mudah_dihubungi' => $row[2],
            'ramah_dan_sopan' => $row[3],
            'rencana_kerja_jelas' => $row[4],
            'komitmen_vmts' => $row[5],
            'menegakkan_kebijakan' => $row[6],
            'pengelolaan_prinsip' => $row[7],
            'karakteristik_kepemimpinan' => $row[8],
            'memberikan_solusi' => $row[9],
            'terbuka_kritik_saran' => $row[10],
            'saran_kritik' => $row[11],
            'pimpinan_dinilai' => $row[12],
            'jenis_kelamin' => $row[13],
            'program_studi' => $row[14],
        ]);
    }
}
