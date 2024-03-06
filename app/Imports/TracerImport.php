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
            'timestamp'                          => $timestamp,
            'nama'                               => $row[1],
            'tempat_lahir'                       => $row[2],
            'tanggal_lahir'                      => $row[3],
            'alamat_rumah'                       => $row[4],
            'kode_pos'                           => $row[5],
            'no_hp_wa'                           => $row[6],
            'email'                              => $row[7],
            'tahun_masuk_kuliah'                 => $row[8],
            'program_studi'                      => $row[9],
            'bulan_tahun_lulus'                  => $row[10],
            'lama_pendidikan'                    => $row[11],
            'kepemilikan_sertifikat_kompetensi'  => $row[12],
            'kepemilikan_str'                    => $row[13],
            'tanggal_keluar_str'                 => $row[14],
            'melanjutkan_pendidikan'             => $row[15],
            'tempat_melanjutkan_pendidikan'      => $row[16],
            'alasan_melanjutkan_pendidikan'      => $row[17],
            'mengetahui_cara_melamar_pekerjaan' => $row[18],
            'jumlah_perusahaan_dilamar'          => $row[19],
            'respon_perusahaan_terhadap_lamaran' => $row[20],
            'bekerja'                            => $row[21],
            'nama_tempat_bekerja'                => $row[22],
            'jenis_instansi_bidang_usaha'        => $row[23],
            'jabatan_profesi'                    => $row[24],
            'bulan_tahun_mulai_bekerja'          => $row[25],
            'masa_tunggu_mendapatkan_pekerjaan'  => $row[26],
            'proses_mendapatkan_pekerjaan'       => $row[27],
            'tanggal_mulai_mencari_pekerjaan'    => $row[28],
            'jenis_pekerjaan'                    => $row[29],
            'tempat_bekerja_tenaga_kesehatan'    => $row[30],
            'pekerjaan_sesuai_bidang_ilmu'       => $row[31],
            'informasi_lowongan_pekerjaan'       => $row[32],
            'puas_dengan_pekerjaan'              => $row[33],
            'pertimbangan_memilih_pekerjaan'     => $row[34],
            'rata_rata_pendapatan'               => $row[35],
            'kebutuhan_institusi_terhadap_lulusan' => $row[36],
            'pendidikan_relevan_dengan_pekerjaan' => $row[37],
            'alasan_pendidikan_tidak_relevan'    => $row[38],
            'saran_praktis_untuk_pendidikan'     => $row[39],
            'kompetensi_diperlukan_dalam_pekerjaan' => $row[40],
            'penilaian_kompetensi_etika'         => $row[41],
            'penilaian_keahlian_bidang_ilmu'     => $row[42],
            'penilaian_kemampuan_bahasa_inggris' => $row[43],
            'penilaian_penggunaan_teknologi_informasi' => $row[44],
            'penilaian_kemampuan_berkomunikasi'  => $row[45],
            'penilaian_kerjasama_dalam_tim_dan_kepemimpinan' => $row[46],
            'penilaian_pengembangan_diri'        => $row[47],
        ]);
    }
}
