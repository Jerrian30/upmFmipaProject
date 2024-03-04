<?php

namespace App\Imports;

use App\Models\Tracer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class TracerImport implements ToModel
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

        return new Tracer([
            'timestamp'                 => $timestamp,
            'email'                     => $row[1],
            'nama_lengkap'              => $row[2],
            'jenis_kelamin'             => $row[3],
            'tempat_tanggal_lahir'      => $row[4],
            'alamat'                    => $row[5],
            'no_hp'                     => $row[6],
            'lulusan_prodi'             => $row[7],
            'angkatan'                  => $row[8],
            'bulan_tahun_lulus'         => $row[9],
            'jalur_masuk'               => $row[10],
            'berorganisasi'             => $row[11],
            'sumber_biaya'              => $row[12],
            'ipk'                       => $row[13],
            'melanjutkan_studi'         => $row[14],
            'tempat_studi_lanjutan'     => $row[15],
            'tahun_studi_lanjutan'      => $row[16],
            'alasan_lanjut_studi'       => $row[17],
            'waktu_tunggu_pekerjaan'    => $row[18],
            'nama_instansi'             => $row[19],
            'bidang_pekerjaan'          => $row[20],
            'jabatan'                   => $row[21],
            'alamat_instansi'           => $row[22],
            'no_telp_instansi'          => $row[23],
            'nama_atasan'               => $row[24],
            'jabatan_atasan'            => $row[25],
            'email_atasan'              => $row[26],
            'proses_dapat_pekerjaan'    => $row[27],
            'pendapatan_per_bulan'      => $row[28],
            'kerja_sesuai_bidang'       => $row[29],
            'kebutuhan_institusi'       => $row[30],
            'pertimbangan_pilih_pekerjaan' => $row[31],
            'omset_per_bulan'           => $row[32],
            'pernah_bekerja_sebelumnya' => $row[33],
            'lama_bekerja_sebelum_wirausaha' => $row[34],
            'omset_rata_bulan_wirausaha' => $row[35],
            'kompetensi_bersaing'       => $row[36],
            'kompetensi_etika'          => $row[37],
            'kompetensi_keahlian_ilmu_utama' => $row[38],
            'kompetensi_bahasa_asing'   => $row[39],
            'kompetensi_teknologi_informasi' => $row[40],
            'kompetensi_komunikasi'     => $row[41],
            'kompetensi_kerjasama'      => $row[42],
            'kompetensi_pengembangan_diri' => $row[43],
            'kriteria_lulusan_prodi'    => $row[44],
        ]);
    }
}
