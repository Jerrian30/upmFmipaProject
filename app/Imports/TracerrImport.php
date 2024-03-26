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
            'email' => $row[1],
            'nama_lengkap' => $row[2],
            'jenis_kelamin' => $row[3],
            'tempat_tanggal_lahir' => $row[4],
            'alamat_rumah' => $row[5],
            'no_hp' => $row[6],
            'lulus_dari_program_studi' => $row[7],
            'angkatan' => $row[8],
            'bulan_tahun_lulus' => $row[9],

            'jalur_masuk_unib' => $row[10],
            'berorganisasi' => $row[11],
            'sumber_biaya_kuliah' => $row[12],
            'ipk' => $row[13],
            'melanjutkan_studi' => $row[14],
            'tempat_melanjutkan_studi' => $row[15],
            'tahun_masuk_dan_lulus_studi' => $row[16],
            'alasan_melanjutkan_studi' => $row[17],
            'waktu_tunggu_pekerjaan' => $row[18],
            'nama_instansi_perusahaan_wirausaha' => $row[19],
             
            'bidang_pekerjaan' => $row[20],
            'jabatan_dalam_perusahaan_instansi' => $row[21],
            'alamat_perusahaan_instansi' => $row[22],
            'nomor_telepon_perusahaan_instansi' => $row[23],
            'nama_atasan_langsung' => $row[24],
            'jabatan_atasan_langsung' => $row[25],
            'email_atasan_langsung' => $row[26],
            'proses_mendapatkan_pekerjaan' => $row[27],
            'pendapatan_rata_rata_per_bulan' => $row[28],
            'pekerjaan_terkait_bidang_ilmu' => $row[29],
            'kebutuhan_institusi_terhadap_lulusan' => $row[30],
            'pertimbangan_memilih_pekerjaan' => $row[31],
            // Lanjutkan dengan kolom tambahan sesuai kebutuhan
            'alasan_wirausaha' => $row[32],
            'pernah_bekerja_sebelum_wirausaha' => $row[33],
            'lama_bekerja_sebelum_wirausaha' => $row[34],
            'omset_rata_rata_wirausaha' => $row[35],
            'kompetensi_etika' => $row[36],
            'kompetensi_keahlian_utama' => $row[37],
            'kompetensi_bahasa_asing' => $row[38],
            'kompetensi_penggunaan_teknologi_informasi' => $row[39],
            'kompetensi_kemampuan_berkomunikasi' => $row[40],
            'kompetensi_kerjasama' => $row[41],
            'kompetensi_pengembangan_diri' => $row[42],
            'kebutuhan_kompetensi_lapangan_kerja' => $row[43]
            
        ]);
    }
}