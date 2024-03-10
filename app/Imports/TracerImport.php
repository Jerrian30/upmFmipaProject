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
        $timestamp = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]))
            ->setTimezone('Asia/Jakarta');

        return new Tracer([
            'timestamp'                              => $timestamp,
            'nama'                                   => $row[1],
            'ttl'                                    => $row[2],
            'alamat_rumah'                           => $row[3],
            'kode_pos'                               => $row[4],
            'no_hp_wa'                               => $row[5],
            'email'                                  => $row[6],
            'tahun_masuk_kuliah'                     => $row[7],
            'program_studi'                          => $row[8],
            'bulan_tahun_lulus'                      => $row[9],
            'lama_pendidikan'                        => $row[10],
            'kepemilikan_serkom'                     => $row[11],
            'kepemilikan_str'                        => $row[12],
            'tanggal_keluar_str'                     => $row[13],
            'melanjutkan_pendidikan'                 => $row[14],
            'tempat_melanjutkan_pendidikan'          => $row[15],
            'alasan_melanjutkan_pendidikan'          => $row[16],
            'mengetahui_cara_melamar_pekerjaan'      => $row[17],
            'jumlah_perusahaan_dilamar'              => $row[18],
            'respon_perusahaan_terhadap_lamaran'     => $row[19],
            'bekerja'                                => $row[20],
            'nama_tempat_bekerja'                    => $row[21],
            'jenis_instansi_bidang_usaha'            => $row[22],
            'jabatan_profesi'                        => $row[23],
            'bulan_tahun_mulai_bekerja'              => $row[24],
            'masa_tunggu_mendapatkan_pekerjaan'      => $row[25],
            'proses_mendapatkan_pekerjaan'           => $row[26],
            'kapan_mulai_mencari_pekerjaan'          => $row[27],
            'jenis_pekerjaan'                        => $row[28],
            'tempat_bekerja_tenaga_kesehatan'        => $row[29],
            'pekerjaan_sesuai_bidang_ilmu'           => $row[30],
            'informasi_lowongan_pekerjaan'           => $row[31],
            'pekerjaan_sesuai_harapan'               => $row[32],
            'puas_dengan_pekerjaan'                  => $row[33],
            'pertimbangan_memilih_pekerjaan'         => $row[34],
            'rata_rata_pendapatan'                   => $row[35],
            'kebutuhan_institusi_terhadap_lulusan'   => $row[36],
            'pendidikan_relevan_dengan_pekerjaan'    => $row[37],
            'alasan_pendidikan_tidak_relevan'        => $row[38],
            'saran_praktis_untuk_pendidikan'         => $row[39],
            'kompetensi_diperlukan_dalam_pekerjaan'  => $row[40],
            'penilaian_kompetensi_etika'             => $row[41],
            'penilaian_keahlian_bidang_ilmu'         => $row[42],
            'penilaian_kemampuan_bahasa_inggris'     => $row[43],
            'penilaian_penggunaan_teknologi_informasi' => $row[44],
            'penilaian_kemampuan_berkomunikasi'      => $row[45],
            'penilaian_kerjasama_dalam_tim_dan_kepemimpinan' => $row[46],
            'penilaian_pengembangan_diri'            => $row[47],
        ]);
    }
}