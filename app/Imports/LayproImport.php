<?php

namespace App\Imports;

use App\Models\Laypro;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class LayproImport implements ToModel
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

        return new Laypro([
            'timestamp' => $timestamp,
            'status' => $row[1], 
            'program_studi' => $row[2], // Program Studi
            'kebersihan_ruangan' => $row[3], // Kebersihan Ruangan
            'fasil_perkuliahan' => $row[4], // Fasilitas Perkuliahan
            'fasil_lab' => $row[5], // Fasilitas Laboratorium
            'info_perkuliahan' => $row[6], // Info Perkuliahan
            'urus_transkrip' => $row[7], // Urus Transkrip
            'urus_krs_khs' => $row[8], // Urus KRS KHS
            'respon_keluhan' => $row[9], // Respon Keluhan
            'penetapan_dosen' => $row[10], // Penetapan Dosen
            'dukung_kegiatan' => $row[11], // Dukung Kegiatan
            'dukung_studi' => $row[12], // Dukung Studi
            'info_ilmiah' => $row[13], // Info Ilmiah
            'ketua_berpakaian_rapi' => $row[14], // Ketua Berpakaian Rapi
            'ketua_responsif' => $row[15], // Ketua Responsif
            'ketua_mudah_dihubungi' => $row[16], // Ketua Mudah Dihubungi
            'petugas_ramah' => $row[17], // Petugas Ramah
            'petugas_it' => $row[18], // Petugas IT
            'saran_kritik' => $row[19], // Saran Kritik
            'jenis_kelamin' => $row[20], // Jenis Kelamin
        ]);
    }
}
