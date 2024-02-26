@extends('layouts.master')
@section('title', 'Survei Mahasiswa')
@section('page', 'Laporan Survei ->  Mahasiswa')

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

    <form action="{{ route('mahasiswa.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <div class="table-responsive">
        <form id="deleteForm" action="{{ route('akademik.delete') }}" method="POST">
            @csrf <!-- Sesuaikan dengan teknologi backend Anda, contoh ini menggunakan Blade Laravel -->
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th><input type="checkbox" id="checkAll"></th>
                        <th>#</th>
                        <th>Timestamp</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Angkatan/Tahun Masuk</th>
                        <th>Semester Saat Ini</th>
                        <th>IPK</th>
                        <th>Dosen Pembimbing Akademik</th>
                        <th>Dosen Pembina Kegiatan</th>
                        <th>Layanan Bimbingan Konseling</th>
                        <th>Reward/Apresiasi/Beasiswa</th>
                        <th>Materi Kuliah Jelas</th>
                        <th>Dosen Ramah, Empati</th>
                        <th>Staf Akademik Kemahasiswaan</th>
                        <th>Ruang Kuliah Nyaman</th>
                        <th>Ruang Laboratorium Menunjang</th>
                        <th>Koleksi Akses Perpustakaan</th>
                        <th>Fasilitas Ibadah/Olahraga/Kantin</th>
                        <th>Fasilitas Internet</th>
                        <th>Fasilitas Organisasi Kemahasiswaan</th>
                        <th>Keamanan Kampus</th>
                        <th>Penanganan Keluhan Mahasiswa</th>
                        <th>Sanksi Pelanggaran Mahasiswa</th>
                        <th>Kejelasan Rencana Pembelajaran</th>
                        <th>Pengembalian Tugas</th>
                        <th>Sistem Penilaian Evaluasi</th>
                        <th>Suasana Akademik</th>
                        <th>Monitoring Kemajuan Mahasiswa</th>
                        <th>Pemahaman Minat/Bakat/Keluhan</th>
                        <th>Saran/Kritik</th>
                    </tr>
                </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Angkatan/Tahun Masuk</th>
                    <th>Semester Saat Ini</th>
                    <th>IPK</th>
                    <th>Dosen Pembimbing Akademik</th>
                    <th>Dosen Pembina Kegiatan</th>
                    <th>Layanan Bimbingan Konseling</th>
                    <th>Reward/Apresiasi/Beasiswa</th>
                    <th>Materi Kuliah Jelas</th>
                    <th>Dosen Ramah, Empati</th>
                    <th>Staf Akademik Kemahasiswaan</th>
                    <th>Ruang Kuliah Nyaman</th>
                    <th>Ruang Laboratorium Menunjang</th>
                    <th>Koleksi Akses Perpustakaan</th>
                    <th>Fasilitas Ibadah/Olahraga/Kantin</th>
                    <th>Fasilitas Internet</th>
                    <th>Fasilitas Organisasi Kemahasiswaan</th>
                    <th>Keamanan Kampus</th>
                    <th>Penanganan Keluhan Mahasiswa</th>
                    <th>Sanksi Pelanggaran Mahasiswa</th>
                    <th>Kejelasan Rencana Pembelajaran</th>
                    <th>Pengembalian Tugas</th>
                    <th>Sistem Penilaian Evaluasi</th>
                    <th>Suasana Akademik</th>
                    <th>Monitoring Kemajuan Mahasiswa</th>
                    <th>Pemahaman Minat/Bakat/Keluhan</th>
                    <th>Saran/Kritik</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $mahasiswa->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->timestamp }}</td>
                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                    <td>{{ $mahasiswa->program_studi }}</td>
                    <td>{{ $mahasiswa->angkatan_tahun_masuk }}</td>
                    <td>{{ $mahasiswa->semester_saat_ini }}</td>
                    <td>{{ $mahasiswa->ipk }}</td>
                    <td>{{ $mahasiswa->dosen_pembimbing_akademik }}</td>
                    <td>{{ $mahasiswa->dosen_pembina_kegiatan }}</td>
                    <td>{{ $mahasiswa->layanan_bimbingan_konseling }}</td>
                    <td>{{ $mahasiswa->reward_apresiasi_beasiswa }}</td>
                    <td>{{ $mahasiswa->materi_kuliah_jelas }}</td>
                    <td>{{ $mahasiswa->dosen_ramah_empati }}</td>
                    <td>{{ $mahasiswa->staf_akademik_kemahasiswaan }}</td>
                    <td>{{ $mahasiswa->ruang_kuliah_nyaman }}</td>
                    <td>{{ $mahasiswa->ruang_laboratorium_menunjang }}</td>
                    <td>{{ $mahasiswa->koleksi_akses_perpustakaan }}</td>
                    <td>{{ $mahasiswa->fasilitas_ibadah_olahraga_kantin }}</td>
                    <td>{{ $mahasiswa->fasilitas_internet }}</td>
                    <td>{{ $mahasiswa->fasilitas_organisasi_kemahasiswaan }}</td>
                    <td>{{ $mahasiswa->keamanan_kampus }}</td>
                    <td>{{ $mahasiswa->penanganan_keluhan_mahasiswa }}</td>
                    <td>{{ $mahasiswa->sanksi_pelanggaran_mahasiswa }}</td>
                    <td>{{ $mahasiswa->kejelasan_rencana_pembelajaran }}</td>
                    <td>{{ $mahasiswa->pengembalian_tugas }}</td>
                    <td>{{ $mahasiswa->sistem_penilaian_evaluasi }}</td>
                    <td>{{ $mahasiswa->suasana_akademik }}</td>
                    <td>{{ $mahasiswa->monitoring_kemajuan_mahasiswa }}</td>
                    <td>{{ $mahasiswa->pemahaman_minat_bakat_keluhan }}</td>
                    <td>{{ $mahasiswa->saran_kritik }}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </form>
</div>

</div>

@endsection

