@extends('layouts.master')
@section('title', 'Survei Tracerr Studi')
@section('page', 'Laporan Survei ->  Tracerr Studi')

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
                        <th>Email Address</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Alamat Rumah</th>
                        <th>No HP</th>
                        <th>Lulus Dari Program Studi</th>
                        <th>Angkatan</th>
                        <th>Bulan Tahun Lulus</th>
                        <th>Jalur Masuk</th>
                        <th>Berorganisasi</th>
                        <th>Sumber Biaya Kuliah</th>
                        <th>IPK</th>
                        <th>Melanjutkan Studi</th>
                        <th>Tempat Melanjutkan Studi</th>
                        <th>Tahun Masuk & Lulus Melanjutkan Studi</th>
                        <th>Alasan Melanjutkan Studi</th>
                        <th>Waktu Tunggu Pekerjaan</th>
                        <th>Nama Instansi Bekerja</th>
                        <th>Bidang Pekerjaan</th>
                        <th>Jabatan</th>
                        <th>Alamat Instansi</th>
                        <th>Nomor Telepon Instansi</th>
                        <th>Nama Atasan Langsung</th>
                        <th>Jabatan Atasan Langsung</th>
                        <th>Email Atasan Langsung</th>
                        <th>Proses Mendapatkan Pekerjaan</th>
                        <th>Pendapatan Rata-rata Per Bulan</th>
                        <th>Kerja Terkait Bidang Ilmu</th>
                        <th>Kebutuhan Institusi Terhadap Lulusan</th>
                        <th>Pertimbangan Memilih Pekerjaan</th>
                        <th>Alasan Wirausaha</th>
                        <th>Pernah Bekerja Sebelumnya</th>
                        <th>Lama Bekerja Sebelum Wirausaha</th>
                        <th>Omset Rata-rata Wirausaha</th>
                        <th>Kemampuan Bersaing Lulusan</th>
                        <th>Etika</th>
                        <th>Keahlian Bidang Ilmu</th>
                        <th>Kemampuan Bahasa Asing</th>
                        <th>Penggunaan Teknologi Informasi</th>
                        <th>Kemampuan Berkomunikasi</th>
                        <th>Kerjasama</th>
                        <th>Pengembangan Diri</th>
                        <th>Kriteria Lulusan yang Diperlukan Lapangan Kerja</th>
                    </tr>                  
                </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Email Address</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat Rumah</th>
                    <th>No HP</th>
                    <th>Lulus Dari Program Studi</th>
                    <th>Angkatan</th>
                    <th>Bulan Tahun Lulus</th>
                    <th>Jalur Masuk</th>
                    <th>Berorganisasi</th>
                    <th>Sumber Biaya Kuliah</th>
                    <th>IPK</th>
                    <th>Melanjutkan Studi</th>
                    <th>Tempat Melanjutkan Studi</th>
                    <th>Tahun Masuk & Lulus Melanjutkan Studi</th>
                    <th>Alasan Melanjutkan Studi</th>
                    <th>Waktu Tunggu Pekerjaan</th>
                    <th>Nama Instansi Bekerja</th>
                    <th>Bidang Pekerjaan</th>
                    <th>Jabatan</th>
                    <th>Alamat Instansi</th>
                    <th>Nomor Telepon Instansi</th>
                    <th>Nama Atasan Langsung</th>
                    <th>Jabatan Atasan Langsung</th>
                    <th>Email Atasan Langsung</th>
                    <th>Proses Mendapatkan Pekerjaan</th>
                    <th>Pendapatan Rata-rata Per Bulan</th>
                    <th>Kerja Terkait Bidang Ilmu</th>
                    <th>Kebutuhan Institusi Terhadap Lulusan</th>
                    <th>Pertimbangan Memilih Pekerjaan</th>
                    <th>Alasan Wirausaha</th>
                    <th>Pernah Bekerja Sebelumnya</th>
                    <th>Lama Bekerja Sebelum Wirausaha</th>
                    <th>Omset Rata-rata Wirausaha</th>
                    <th>Kemampuan Bersaing Lulusan</th>
                    <th>Etika</th>
                    <th>Keahlian Bidang Ilmu</th>
                    <th>Kemampuan Bahasa Asing</th>
                    <th>Penggunaan Teknologi Informasi</th>
                    <th>Kemampuan Berkomunikasi</th>
                    <th>Kerjasama</th>
                    <th>Pengembangan Diri</th>
                    <th>Kriteria Lulusan yang Diperlukan Lapangan Kerja</th>
                </tr>                               
            </tfoot>
            <tbody>
                @foreach($tracerrs as $tracerr)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $tracerr->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tracerr->timestamp }}</td>
                    <td>{{ $tracerr->email_address }}</td>
                    <td>{{ $tracerr->nama_lengkap }}</td>
                    <td>{{ $tracerr->jenis_kelamin }}</td>
                    <td>{{ $tracerr->tempat_tanggal_lahir }}</td>
                    <td>{{ $tracerr->alamat_rumah }}</td>
                    <td>{{ $tracerr->no_hp }}</td>
                    <td>{{ $tracerr->lulus_dari_program_studi }}</td>
                    <td>{{ $tracerr->angkatan }}</td>
                    <td>{{ $tracerr->bulan_tahun_lulus }}</td>
                    <td>{{ $tracerr->jalur_masuk }}</td>
                    <td>{{ $tracerr->berorganisasi }}</td>
                    <td>{{ $tracerr->sumber_biaya_kuliah }}</td>
                    <td>{{ $tracerr->ipk }}</td>
                    <td>{{ $tracerr->melanjutkan_studi }}</td>
                    <td>{{ $tracerr->tempat_melanjutkan_studi }}</td>
                    <td>{{ $tracerr->tahun_masuk_lulus_melanjutkan_studi }}</td>
                    <td>{{ $tracerr->alasan_melanjutkan_studi }}</td>
                    <td>{{ $tracerr->waktu_tunggu_pekerjaan }}</td>
                    <td>{{ $tracerr->nama_instansi_bekerja }}</td>
                    <td>{{ $tracerr->bidang_pekerjaan }}</td>
                    <td>{{ $tracerr->jabatan }}</td>
                    <td>{{ $tracerr->alamat_instansi }}</td>
                    <td>{{ $tracerr->nomor_telepon_instansi }}</td>
                    <td>{{ $tracerr->nama_atasan_langsung }}</td>
                    <td>{{ $tracerr->jabatan_atasan_langsung }}</td>
                    <td>{{ $tracerr->email_atasan_langsung }}</td>
                    <td>{{ $tracerr->proses_mendapatkan_pekerjaan }}</td>
                    <td>{{ $tracerr->pendapatan_rata_rata_per_bulan }}</td>
                    <td>{{ $tracerr->kerja_terkait_bidang_ilmu }}</td>
                    <td>{{ $tracerr->kebutuhan_institusi_terhadap_lulusan }}</td>
                    <td>{{ $tracerr->pertimbangan_memilih_pekerjaan }}</td>
                    <td>{{ $tracerr->alasan_wirausaha }}</td>
                    <td>{{ $tracerr->pernah_bekerja_sebelumnya }}</td>
                    <td>{{ $tracerr->lama_bekerja_sebelum_wirausaha }}</td>
                    <td>{{ $tracerr->omset_rata_rata_wirausaha }}</td>
                    <td>{{ $tracerr->kemampuan_bersaing_lulusan }}</td>
                    <td>{{ $tracerr->etika }}</td>
                    <td>{{ $tracerr->keahlian_bidang_ilmu }}</td>
                    <td>{{ $tracerr->kemampuan_bahasa_asing }}</td>
                    <td>{{ $tracerr->penggunaan_teknologi_informasi }}</td>
                    <td>{{ $tracerr->kemampuan_berkomunikasi }}</td>
                    <td>{{ $tracerr->kerjasama }}</td>
                    <td>{{ $tracerr->pengembangan_diri }}</td>
                    <td>{{ $tracerr->kriteria_lulusan_yang_diperlukan_lapangan_kerja }}</td>
                </tr>
            @endforeach
            </tbody>
            
        </table>
    </form>
</div>

</div>

@endsection

