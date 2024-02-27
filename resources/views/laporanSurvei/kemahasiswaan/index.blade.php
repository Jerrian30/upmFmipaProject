@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')

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

    <form action="{{ route('kemahasiswaan.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('kemahasiswaan.delete') }}" method="POST" id="deleteForm">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
    <div class="table-responsive">
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
                    <th>Lama Bergabung dengan UNIB</th>
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
                    <th>Lama Bergabung dengan UNIB</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($kemahasiswaans as $kemahasiswaan)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $kemahasiswaan->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kemahasiswaan->timestamp }}</td>
                    <td>{{ $kemahasiswaan->status }}</td>
                    <td>{{ $kemahasiswaan->info_layanan }}</td>
                    <td>{{ $kemahasiswaan->suasana_ruangan }}</td>
                    <td>{{ $kemahasiswaan->staff_penampilan }}</td>
                    <td>{{ $kemahasiswaan->staff_pengetahuan }}</td>
                    <td>{{ $kemahasiswaan->staff_sop }}</td>
                    <td>{{ $kemahasiswaan->staff_responsive }}</td>
                    <td>{{ $kemahasiswaan->staff_dapat_dihubungi }}</td>
                    <td>{{ $kemahasiswaan->staff_terbuka_kritik }}</td>
                    <td>{{ $kemahasiswaan->saran_kritik }}</td>
                    <td>{{ $kemahasiswaan->jenis_kelamin }}</td>
                    <td>{{ $kemahasiswaan->program_studi}}</td>
                    <td>{{ $kemahasiswaan->lama_bergabung }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
    </div>
</div>

@endsection

