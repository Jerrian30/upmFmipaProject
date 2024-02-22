@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Subbagian Akademik')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Subbagian Akademik')

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
@endsection

@section('content')

<div class="container-fluid">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('akademik.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status Responden</th>
                    <th>Ketersediaan Informasi</th>
                    <th>Suasana Ruangan</th>
                    <th>Penampilan Staff</th>
                    <th>Ketepatan Layanan</th>
                    <th>Kemudahan Menemui Staff</th>
                    <th>Memberikan Layanan Akademik</th>
                    <th>Keterbukaan Terhadap Kritik/Saran</th>
                    <th>Saran/Kritik</th>
                    <th>Program Studi/Unit Kerja/Lainnya</th>
                    <th>Jenis Kelamin</th>
                </tr>
                
            </thead>
            <tfoot class="text-center">
                <tr>
                    <tr>
                        <th>#</th>
                        <th>Timestamp</th>
                        <th>Status Responden</th>
                        <th>Ketersediaan Informasi</th>
                        <th>Suasana Ruangan</th>
                        <th>Penampilan Staff</th>
                        <th>Ketepatan Layanan</th>
                        <th>Kemudahan Menemui Staff</th>
                        <th>Memberikan Layanan Akademik</th>
                        <th>Keterbukaan Terhadap Kritik/Saran</th>
                        <th>Saran/Kritik</th>
                        <th>Program Studi/Unit Kerja/Lainnya</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                    

                </tr>
            </tfoot>
            <tbody>
                @foreach($akademiks as $akademik)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $akademik->timestamp }}</td>
                    <td>{{ $akademik->status }}</td>
                    <td>{{ $akademik->info_layanan }}</td>
                    <td>{{ $akademik->suasana_ruangan }}</td>
                    <td>{{ $akademik->staff_penampilan }}</td>
                    <td>{{ $akademik->ketepatan_layanan }}</td>
                    <td>{{ $akademik->staff_mudah_ditemui }}</td>
                    <td>{{ $akademik->layanan_akademik }}</td>
                    <td>{{ $akademik->staff_terbuka_kritik }}</td>
                    <td>{{ $akademik->saran_kritik }}</td>
                    <td>{{ $akademik->program_studi}}</td>
                    <td>{{ $akademik->jenis_kelamin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection

