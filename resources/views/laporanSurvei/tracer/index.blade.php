@extends('layouts.master')
@section('title', 'Survei Tracer Studi ')
@section('page', 'Laporan Survei ->  Tracer Studi ')

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputFile = document.getElementById('excel_file');
        var inputFileLabel = document.querySelector('label[for="excel_file"]');

        inputFile.addEventListener('change', function(event) {
            var fileName = event.target.files[0].name;
            inputFileLabel.textContent = fileName;
        });
    });
</script>
<script>
    document.getElementById('checkAll').onclick = function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
    // Jika Anda menambahkan checkbox di footer, duplikat dan sesuaikan script untuk 'checkAllFooter'
</script>
@endsection

@section('content')

<div class="container-fluid">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tracer.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6"> <!-- Atur lebar kolom di sini -->
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" name="excel_file" accept=".xlsx, .csv" class="custom-file-input" id="excel_file" required>
                        <label class="custom-file-label" for="excel_file">Pilih File Excel...</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Import</button>
            </div>
        </div>
    </form>
    <form action="{{ route('tracer.delete') }}" method="POST" id="deleteForm">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th><input type="checkbox" id="checkAll"></th>
                        <th>#</th>
                        <th>Timestamp</th>
                        <th>Nama</th>
                        <th>Tempat,Tanggal Lahir</th>
                        <th>Alamat Rumah</th>
                        <th>Kode Pos</th>
                        <th>No HP WA</th>
                        <th>Email</th>
                        <th>Tahun Masuk Kuliah</th>
                        <th>Program Studi</th>
                        <th>Bulan Tahun Lulus</th>
                        <th>Lama Pendidikan</th>
                        <th>Kepemilikan Sertifikat Kompetensi</th>
                        <th>Kepemilikan STR</th>
                        <th>Tanggal Keluar STR</th>
                        <th>Melanjutkan Pendidikan</th>
                        <th>Tempat Melanjutkan Pendidikan</th>
                        <th>Alasan Melanjutkan Pendidikan</th>
                        <th>Mengetahui Cara Melamar Pekerjaan</th>
                        <th>Jumlah Perusahaan Dilamar</th>
                        <th>Respon Perusahaan Terhadap Lamaran</th>
                        <th>Bekerja</th>
                        <th>Nama Tempat Bekerja</th>
                        <th>Jenis Instansi Bidang Usaha</th>
                        <th>Jabatan Profesi</th>
                        <th>Bulan Tahun Mulai Bekerja</th>
                        <th>Masa Tunggu Mendapatkan Pekerjaan</th>
                        <th>Proses Mendapatkan Pekerjaan</th>
                        <th>Tanggal Mulai Mencari Pekerjaan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Tempat Bekerja Tenaga Kesehatan</th>
                        <th>Pekerjaan Sesuai Bidang Ilmu</th>
                        <th>Informasi Lowongan Pekerjaan</th>
                        <th>Pekerjaan Sesuai Harapan</th>
                        <th>Puas Dengan Pekerjaan</th>
                        <th>Pertimbangan Memilih Pekerjaan</th>
                        <th>Rata-Rata Pendapatan</th>
                        <th>Kebutuhan Institusi Terhadap Lulusan</th>
                        <th>Pendidikan Relevan Dengan Pekerjaan</th>
                        <th>Alasan Pendidikan Tidak Relevan</th>
                        <th>Saran Praktis Untuk Pendidikan</th>
                        <th>Kompetensi Diperlukan Dalam Pekerjaan</th>
                        <th>Penilaian Kompetensi Etika</th>
                        <th>Penilaian Keahlian Bidang Ilmu</th>
                        <th>Penilaian Kemampuan Bahasa Inggris</th>
                        <th>Penilaian Penggunaan Teknologi Informasi</th>
                        <th>Penilaian Kemampuan Berkomunikasi</th>
                        <th>Penilaian Kerjasama Dalam Tim dan Kepemimpinan</th>
                        <th>Penilaian Pengembangan Diri</th>
                    </tr>                  
                </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Nama</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat Rumah</th>
                    <th>Kode Pos</th>
                    <th>No HP WA</th>
                    <th>Email</th>
                    <th>Tahun Masuk Kuliah</th>
                    <th>Program Studi</th>
                    <th>Bulan Tahun Lulus</th>
                    <th>Lama Pendidikan</th>
                    <th>Kepemilikan Sertifikat Kompetensi</th>
                    <th>Kepemilikan STR</th>
                    <th>Tanggal Keluar STR</th>
                    <th>Melanjutkan Pendidikan</th>
                    <th>Tempat Melanjutkan Pendidikan</th>
                    <th>Alasan Melanjutkan Pendidikan</th>
                    <th>Mengetahui Cara Melamar Pekerjaan</th>
                    <th>Jumlah Perusahaan Dilamar</th>
                    <th>Respon Perusahaan Terhadap Lamaran</th>
                    <th>Bekerja</th>
                    <th>Nama Tempat Bekerja</th>
                    <th>Jenis Instansi Bidang Usaha</th>
                    <th>Jabatan Profesi</th>
                    <th>Bulan Tahun Mulai Bekerja</th>
                    <th>Masa Tunggu Mendapatkan Pekerjaan</th>
                    <th>Proses Mendapatkan Pekerjaan</th>
                    <th>Tanggal Mulai Mencari Pekerjaan</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Tempat Bekerja Tenaga Kesehatan</th>
                    <th>Pekerjaan Sesuai Bidang Ilmu</th>
                    <th>Informasi Lowongan Pekerjaan</th>
                    <th>Pekerjaan Sesuai Harapan</th>
                    <th>Puas Dengan Pekerjaan</th>
                    <th>Pertimbangan Memilih Pekerjaan</th>
                    <th>Rata-Rata Pendapatan</th>
                    <th>Kebutuhan Institusi Terhadap Lulusan</th>
                    <th>Pendidikan Relevan Dengan Pekerjaan</th>
                    <th>Alasan Pendidikan Tidak Relevan</th>
                    <th>Saran Praktis Untuk Pendidikan</th>
                    <th>Kompetensi Diperlukan Dalam Pekerjaan</th>
                    <th>Penilaian Kompetensi Etika</th>
                    <th>Penilaian Keahlian Bidang Ilmu</th>
                    <th>Penilaian Kemampuan Bahasa Inggris</th>
                    <th>Penilaian Penggunaan Teknologi Informasi</th>
                    <th>Penilaian Kemampuan Berkomunikasi</th>
                    <th>Penilaian Kerjasama Dalam Tim dan Kepemimpinan</th>
                    <th>Penilaian Pengembangan Diri</th>
                </tr>                               
            </tfoot>
            <tbody>
                @foreach($tracers as $tracer)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $tracer->id }}"></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tracer->timestamp }}</td>
                        <td>{{ $tracer->nama }}</td>
                        <td>{{ $tracer->ttl }}</td>
                        <td>{{ $tracer->alamat_rumah }}</td>
                        <td>{{ $tracer->kode_pos }}</td>
                        <td>{{ $tracer->no_hp_wa }}</td>
                        <td>{{ $tracer->email }}</td>
                        <td>{{ $tracer->tahun_masuk_kuliah }}</td>
                        <td>{{ $tracer->program_studi }}</td>
                        <td>{{ $tracer->bulan_tahun_lulus }}</td>
                        <td>{{ $tracer->lama_pendidikan }}</td>
                        <td>{{ $tracer->kepemilikan_serkom }}</td>
                        <td>{{ $tracer->kepemilikan_str }}</td>
                        <td>{{ $tracer->tanggal_keluar_str }}</td>
                        <td>{{ $tracer->melanjutkan_pendidikan }}</td>
                        <td>{{ $tracer->tempat_melanjutkan_pendidikan }}</td>
                        <td>{{ $tracer->alasan_melanjutkan_pendidikan }}</td>
                        <td>{{ $tracer->mengetahui_cara_melamar_pekerjaan }}</td>
                        <td>{{ $tracer->jumlah_perusahaan_dilamar }}</td>
                        <td>{{ $tracer->respon_perusahaan_terhadap_lamaran }}</td>
                        <td>{{ $tracer->bekerja }}</td>
                        <td>{{ $tracer->nama_tempat_bekerja }}</td>
                        <td>{{ $tracer->jenis_instansi_bidang_usaha }}</td>
                        <td>{{ $tracer->jabatan_profesi }}</td>
                        <td>{{ $tracer->bulan_tahun_mulai_bekerja }}</td>
                        <td>{{ $tracer->masa_tunggu_mendapatkan_pekerjaan }}</td>
                        <td>{{ $tracer->proses_mendapatkan_pekerjaan }}</td>
                        <td>{{ $tracer->kapan_mulai_mencari_pekerjaan }}</td>
                        <td>{{ $tracer->jenis_pekerjaan }}</td>
                        <td>{{ $tracer->tempat_bekerja_tenaga_kesehatan }}</td>
                        <td>{{ $tracer->pekerjaan_sesuai_bidang_ilmu }}</td>
                        <td>{{ $tracer->informasi_lowongan_pekerjaan }}</td>
                        <td>{{ $tracer->pekerjaan_sesuai_harapan }}</td>
                        <td>{{ $tracer->puas_dengan_pekerjaan }}</td>
                        <td>{{ $tracer->pertimbangan_memilih_pekerjaan }}</td>
                        <td>{{ $tracer->rata_rata_pendapatan }}</td>
                        <td>{{ $tracer->kebutuhan_institusi_terhadap_lulusan }}</td>
                        <td>{{ $tracer->pendidikan_relevan_dengan_pekerjaan }}</td>
                        <td>{{ $tracer->alasan_pendidikan_tidak_relevan }}</td>
                        <td>{{ $tracer->saran_praktis_untuk_pendidikan }}</td>
                        <td>{{ $tracer->kompetensi_diperlukan_dalam_pekerjaan }}</td>
                        <td>{{ $tracer->penilaian_kompetensi_etika }}</td>
                        <td>{{ $tracer->penilaian_keahlian_bidang_ilmu }}</td>
                        <td>{{ $tracer->penilaian_kemampuan_bahasa_inggris }}</td>
                        <td>{{ $tracer->penilaian_penggunaan_teknologi_informasi }}</td>
                        <td>{{ $tracer->penilaian_kemampuan_berkomunikasi }}</td>
                        <td>{{ $tracer->penilaian_kerjasama_dalam_tim_dan_kepemimpinan }}</td>
                        <td>{{ $tracer->penilaian_pengembangan_diri }}</td>
                    </tr>
                @endforeach          
            </tbody>
            
        </table>
    </form>
</div>

</div>

@endsection

