@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Subbagian TURTP')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Subbagian TURTP')

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

    <form action="{{ route('turtp.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
                    <tr>
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
                    

                </tr>
            </tfoot>
            <tbody>
                @foreach($turtps as $turtp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $turtp->timestamp }}</td>
                    <td>{{ $turtp->status }}</td>
                    <td>{{ $turtp->info_layanan }}</td>
                    <td>{{ $turtp->suasana_ruangan }}</td>
                    <td>{{ $turtp->staff_penampilan }}</td>
                    <td>{{ $turtp->staff_pengetahuan }}</td>
                    <td>{{ $turtp->staff_sop }}</td>
                    <td>{{ $turtp->staff_responsive }}</td>
                    <td>{{ $turtp->staff_dapat_dihubungi }}</td>
                    <td>{{ $turtp->staff_terbuka_kritik }}</td>
                    <td>{{ $turtp->saran_kritik }}</td>
                    <td>{{ $turtp->jenis_kelamin }}</td>
                    <td>{{ $turtp->program_studi}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection

