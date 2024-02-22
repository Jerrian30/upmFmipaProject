<?php

namespace App\Imports;

use App\Models\Akademik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class AkademikImport implements ToModel
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

        return new Akademik([
            'timestamp'                 => $timestamp,
            'status'                    => $row[1], 
            'info_layanan'              => $row[2], 
            'suasana_ruangan'           => $row[3],
            'staff_penampilan'          => $row[4],
            'ketepatan_layanan'         => $row[5],
            'staff_mudah_ditemui'     => $row[6],
            'layanan_akademik'          => $row[7],
            'staff_terbuka_kritik'      => $row[8],
            'saran_kritik'              => $row[9],
            'program_studi'             => $row[10], 
            'jenis_kelamin'             => $row[11], 
        ]);
    }
}
