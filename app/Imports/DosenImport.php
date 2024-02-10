<?php

namespace App\Imports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;



class DosenImport implements ToModel, WithEvents
{
    protected $delimiter = ';';
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $timestamp = Carbon::createFromTimestamp($row[0] * 86400 - 2209186799) // 25569 adalah jumlah hari dari 30 Desember 1899 ke 1 Januari 1970
        ->setTimezone('Asia/Jakarta');
        
        return new Dosen([
            'timestamp' => $timestamp,
            'program_studi' => $row[1] ,
            'konsistensi_pimpinan' => $row[2],
            'efektivitas_pembagian_tugas' => $row[3],
            'kebijakan_pimpinan' => $row[4],
            'pengelolaan_sdm' => $row[5],
            'ketersediaan_fasilitas_sarana' => $row[6],
            'fasilitas_penelitian_pengabdian' => $row[7],
            'suasana_perkuliahan' => $row[8],
            'kesempatan_pengembangan_karir' => $row[9],
            'pembagian_beban_kerja' => $row[10],
            'kepuasan_kesejahteraan_dosen' => $row[11],
            'status_responden' => $row[12],
            'ketersediaan_dana_pengembangan' => $row[13],
            'saran_kritik' => $row[14],
            'proyeksi_vmts' => $row[15],
        ]);
    }

    public function registerEvents(): array
    {
        return [
            BeforeImport::class => function (BeforeImport $event) {
                date_default_timezone_set('Asia/Jakarta');
            },
        ];
    }
}
