@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Subbagian Keuangan')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Subbagian Keuangan')

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

    <form action="{{ route('keuangan.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
        <form id="deleteForm" action="{{ route('keuangan.delete') }}" method="POST">
            @csrf <!-- Sesuaikan dengan teknologi backend Anda, contoh ini menggunakan Blade Laravel -->
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status Responden</th>
                    <th>Ketersediaan Informasi</th>
                    <th>Suasana Ruangan</th>
                    <th>Penampilan Staff</th>
                    <th>Pengetahuan Staff</th>
                    <th>Pelayanan SOP</th>
                    <th>Responsivitas Staff</th>
                    <th>Kemudahan Menghubungi Staff</th>
                    <th>Keterbukaan Terhadap Kritik/Saran</th>
                    <th>Saran/Kritik</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi/Unit Kerja/Lainnya</th>
                </tr>
                
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                        <th>#</th>
                        <th>Timestamp</th>
                        <th>Status Responden</th>
                        <th>Ketersediaan Informasi</th>
                        <th>Suasana Ruangan</th>
                        <th>Penampilan Staff</th>
                        <th>Pengetahuan Staff</th>
                        <th>Pelayanan SOP</th>
                        <th>Responsivitas Staff</th>
                        <th>Kemudahan Menghubungi Staff</th>
                        <th>Keterbukaan Terhadap Kritik/Saran</th>
                        <th>Saran/Kritik</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi/Unit Kerja/Lainnya</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($keuangans as $keuangan)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $keuangan->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $keuangan->timestamp }}</td>
                    <td>{{ $keuangan->status }}</td>
                    <td>{{ $keuangan->info_layanan }}</td>
                    <td>{{ $keuangan->suasana_ruangan }}</td>
                    <td>{{ $keuangan->staff_penampilan }}</td>
                    <td>{{ $keuangan->staff_pengetahuan }}</td>
                    <td>{{ $keuangan->staff_sop }}</td>
                    <td>{{ $keuangan->staff_responsive }}</td>
                    <td>{{ $keuangan->staff_dapat_dihubungi }}</td>
                    <td>{{ $keuangan->staff_terbuka_kritik }}</td>
                    <td>{{ $keuangan->saran_kritik }}</td>
                    <td>{{ $keuangan->jenis_kelamin }}</td>
                    <td>{{ $keuangan->program_studi}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection

