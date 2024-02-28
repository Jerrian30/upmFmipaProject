<?php

namespace App\Imports;

use App\Models\Visi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class VisiImport implements ToModel
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

        return new Visi([
            'timestamp'                 => $timestamp,
            'program_studi' => $row[1],
            'status_di_universitas'     => $row[2],
            'lama_bergabung'            => $row[3],
            'mengetahui_vmts'           => $row[4],
            'sumber_informasi_vmts'     => $row[5],
            'ikut_sosialisasi_vmts'     => $row[6],
            'pemahaman_visi'            => $row[7],
            'pemahaman_misi'            => $row[8],
            'visi_sesuai_tuntutan_kerja'=> $row[9],
            'visi_realistis'            => $row[10],
            'misi_sesuai_tridharma'     => $row[11],
            'misi_tujuan_strategi_dukung_visi' => $row[12],
            'vmts_dukung_atmosfer_akademik' => $row[13],
            'yakin_capai_vmts'          => $row[14],
            'estimasi_waktu_capai_vmts' => $row[15],
        ]);
    }
}
