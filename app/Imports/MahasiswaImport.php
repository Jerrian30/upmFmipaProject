<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class MahasiswaImport implements ToModel
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

        return new Mahasiswa([
            'timestamp' => $timestamp,
            'jenis_kelamin'                     => $row[1],
            'program_studi'                     => $row[2],
            'angkatan_tahun_masuk'              => $row[3],
            'semester_saat_ini'                 => $row[4],
            'ipk'                               => $row[5],
            'dosen_pembimbing_akademik'         => $row[6],
            'dosen_pembina_kegiatan'            => $row[7],
            'layanan_bimbingan_konseling'       => $row[8],
            'reward_apresiasi_beasiswa'         => $row[9],
            'materi_kuliah_jelas'               => $row[10],
            'dosen_ramah_empati'                => $row[11],
            'staf_akademik_kemahasiswaan'       => $row[12],
            'ruang_kuliah_nyaman'               => $row[13],
            'ruang_laboratorium_menunjang'      => $row[14],
            'koleksi_akses_perpustakaan'        => $row[15],
            'fasilitas_ibadah_olahraga_kantin'  => $row[16],
            'fasilitas_internet'                => $row[17],
            'fasilitas_organisasi_kemahasiswaan'=> $row[18],
            'keamanan_kampus'                   => $row[19],
            'penanganan_keluhan_mahasiswa'      => $row[20],
            'sanksi_pelanggaran_mahasiswa'      => $row[21],
            'kejelasan_rencana_pembelajaran'    => $row[22],
            'pengembalian_tugas'                => $row[23],
            'sistem_penilaian_evaluasi'         => $row[24],
            'suasana_akademik'                  => $row[25],
            'monitoring_kemajuan_mahasiswa'     => $row[26],
            'pemahaman_minat_bakat_keluhan'     => $row[27],
            'saran_kritik'                      => $row[28],
        ]);
    }
}
