<?php

namespace App\Imports;

use App\Models\PenggunaLulusan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;



class PenggunaLulusanImport implements ToModel, WithEvents
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
        
        return new PenggunaLulusan([
            'timestamp' => $timestamp,
            'program_studi' => $row[1] ,
            'kejujuran_etika' => $row[2],
            'kemampuan_bidang_keilmuan' => $row[3],
            'kemampuan_bahasa_asing' => $row[4],
            'kemampuan_teknologi_informasi' => $row[5],
            'kemampuan_berkomunikasi' => $row[6],
            'kemampuan_kerjasama_tim' => $row[7],
            'kedisiplinan' => $row[8],
            'kepercayaan_diri' => $row[9],
            'rasa_tanggungjawab' => $row[10],
            'kemampuan_menyampaikan_ide' => $row[11],
            'keunggulan_alumni' => $row[12],
            'kelemahan_alumni' => $row[13],
            'kualitas_alumni' => $row[14],
            'kompetensi_penting' => $row[15],
            'saran_pemantapan_kompetensi' => $row[16],
            'saran_lembaga_unib' => $row[17],
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
