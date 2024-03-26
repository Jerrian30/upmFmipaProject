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
        $timestamp = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]))
            ->setTimezone('Asia/Jakarta');

        return new Tracerr([
            'timestamp' => $timestamp,
            'email_address'                               => $row[1], 
            'nama_lengkap'                                => $row[2], 
            'jenis_kelamin'                               => $row[3], 
            'tempat_tanggal_lahir'                        => $row[4], 
            'alamat_rumah'                                => $row[5], 
            'no_hp'                                       => $row[6], 
            'lulus_dari_program_studi'                    => $row[7], 
            'angkatan'                                    => $row[8], 
            'bulan_tahun_lulus'                           => $row[9], 
            'jalur_masuk'                                 => $row[10], 
            'berorganisasi'                               => $row[11], 
            'sumber_biaya_kuliah'                         => $row[12], 
            'ipk'                                         => $row[13], 
            'melanjutkan_studi'                           => $row[14], 
            'tempat_melanjutkan_studi'                    => $row[15], 
            'tahun_masuk_lulus_melanjutkan_studi'         => $row[16], 
            'alasan_melanjutkan_studi'                    => $row[17], 
            'waktu_tunggu_pekerjaan'                      => $row[18], 
            'nama_instansi_bekerja'                       => $row[19],
            'bidang_pekerjaan'                            => $row[20],
            'jabatan'                                     => $row[21],
            'alamat_instansi'                             => $row[22],
            'nomor_telepon_instansi'                      => $row[23],
            'nama_atasan_langsung'                        => $row[24],
            'jabatan_atasan_langsung'                     => $row[25],
            'email_atasan_langsung'                       => $row[26],
            'proses_mendapatkan_pekerjaan'                => $row[27],
            'pendapatan_rata_rata_per_bulan'              => $row[28],
            'kerja_terkait_bidang_ilmu'                   => $row[29],
            'kebutuhan_institusi_terhadap_lulusan'        => $row[30],
            'pertimbangan_memilih_pekerjaan'              => $row[31],
            'alasan_memutuskan_wirausaha'                 => $row[32],
            'pernah_bekerja_sebelum_wirausaha'            => $row[33],
            'lama_bekerja_sebelum_wirausaha'              => $row[34],
            'omset_rata_rata_wirausaha'                   => $row[35],
            'kompetisi_dengan_lulusan_lain'               => $row[36],
            'kompetensi_etika'                            => $row[37],
            'kompetensi_bidang_ilmu_utama'                => $row[38],
            'kompetensi_bahasa_asing'                     => $row[39],
            'kompetensi_penggunaan_teknologi_informasi'   => $row[40],
            'kompetensi_kemampuan_berkomunikasi'          => $row[41],
            'kompetensi_kerjasama'                        => $row[42],
            'kompetensi_pengembangan_diri'                => $row[43],
            'kriteria_lulusan_yang_diperlukan_lapangan_pekerjaan' => $row[44],
        ]);
    }
}