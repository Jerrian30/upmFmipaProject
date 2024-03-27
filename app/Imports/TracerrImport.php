<?php

namespace App\Imports;

use App\Models\Tracerr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeImport;
use Carbon\Carbon;

class TracerrImport implements ToModel
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

        return new Tracerr([
            'timestamp' => $timestamp,
            'alamat_email'                               => $row[1], 
            'nama_lengkap'                               => $row[2], 
            'jenis_kelamin'                              => $row[3], 
            'tempat_tanggal_lahir'                       => $row[4], 
            'alamat_rumah'                               => $row[5], 
            'nomor_hp'                                   => $row[6], 
            'lulus_dari_program_studi'                   => $row[7], 
            'angkatan'                                   => $row[8], 
            'bulan_tahun_lulus'                          => $row[9], 
            'jalur_masuk'                                => $row[10], 
            'berorganisasi'                              => $row[11], 
            'sumber_biaya_kuliah'                        => $row[12], 
            'ipk'                                        => $row[13], 
            'melanjutkan_studi'                          => $row[14], 
            'detail_lanjut_studi'                        => $row[15], 
            'periode_lanjut_studi'                       => $row[16], 
            'alasan_lanjut_studi'                        => $row[17], 
            'waktu_tunggu_pekerjaan'                     => $row[18], 
            'nama_instansi'                              => $row[19],
            'bidang_pekerjaan'                           => $row[20],
            'jabatan'                                    => $row[21],
            'alamat_instansi'                            => $row[22],
            'telepon_instansi'                           => $row[23], // Disesuaikan dari 'nomor_telepon_instansi'
            'nama_atasan'                                => $row[24], // Disesuaikan dari 'nama_atasan_langsung'
            'jabatan_atasan'                             => $row[25], // Disesuaikan dari 'jabatan_atasan_langsung'
            'email_atasan'                               => $row[26], // Disesuaikan dari 'email_atasan_langsung'
            'proses_mendapatkan_pekerjaan'               => $row[27],
            'pendapatan_rata_rata_per_bulan'             => $row[28],
            'kerja_terkait_bidang_ilmu'                  => $row[29],
            'kebutuhan_institusi_terhadap_lulusan'       => $row[30],
            'pertimbangan_memilih_pekerjaan'             => $row[31],
            'alasan_memutuskan_wirausaha'                => $row[32],
            'pernah_bekerja_sebelum_wirausaha'           => $row[33],
            'lama_bekerja_sebelum_wirausaha'             => $row[34],
            'omset_rata_rata_wirausaha'                  => $row[35], // Perlu perhatian jika tipe datanya perlu disesuaikan
            'kompetisi_dengan_lulusan_lain'              => $row[36],
            'kompetensi_etika'                           => $row[37],
            'kompetensi_bidang_ilmu_utama'               => $row[38],
            'kompetensi_bahasa_asing'                    => $row[39],
            'kompetensi_penggunaan_teknologi_informasi'  => $row[40],
            'kompetensi_kemampuan_berkomunikasi'         => $row[41],
            'kompetensi_kerjasama'                       => $row[42],
            'kompetensi_pengembangan_diri'               => $row[43],
            'kriteria_lulusan_yang_diperlukan_lapangan_pekerjaan' => $row[44],
        ]);
    }
}