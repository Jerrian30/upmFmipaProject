@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Laboratorium')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Laboratorium')

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

    <form action="{{ route('lab.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('lab.delete') }}" method="POST" id="deleteForm">
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
                    <th>Info Layanan</th>
                    <th>Kebersihan Laboratorium</th>
                    <th>Sarpras Terawat</th>
                    <th>Pelayanan Staf</th>
                    <th>Terbuka Kritik Saran</th>
                    <th>Penyelesaian Persoalan</th>
                    <th>Manual Peralatan</th>
                    <th>Ketrampilan Staf</th>
                    <th>Hasil Dapat Dipertanggungjawabkan</th>
                    <th>Ketua Staf Mudah Dihubungi</th>
                    <th>Sikap Peduli Staf</th>
                    <th>Sarpras Lengkap</th>
                    <th>Saran Kritik</th>
                    <th>Program Studi</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status Responden</th>
                    <th>Info Layanan</th>
                    <th>Kebersihan Laboratorium</th>
                    <th>Sarpras Terawat</th>
                    <th>Pelayanan Staf</th>
                    <th>Terbuka Kritik Saran</th>
                    <th>Penyelesaian Persoalan</th>
                    <th>Manual Peralatan</th>
                    <th>Ketrampilan Staf</th>
                    <th>Hasil Dapat Dipertanggungjawabkan</th>
                    <th>Ketua Staf Mudah Dihubungi</th>
                    <th>Sikap Peduli Staf</th>
                    <th>Sarpras Lengkap</th>
                    <th>Saran Kritik</th>
                    <th>Program Studi</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($labs as $lab)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $lab->id }}"></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lab->timestamp }}</td>
                        <td>{{ $lab->responden_status }}</td>
                        <td>{{ $lab->info_layanan }}</td>
                        <td>{{ $lab->kebersihan_laboratorium }}</td>
                        <td>{{ $lab->sarpras_terawat }}</td>
                        <td>{{ $lab->pelayanan_staf }}</td>
                        <td>{{ $lab->terbuka_kritik_saran }}</td>
                        <td>{{ $lab->penyelesaian_persoalan }}</td>
                        <td>{{ $lab->manual_peralatan }}</td>
                        <td>{{ $lab->ketrampilan_staf }}</td>
                        <td>{{ $lab->hasil_dapat_dipertanggungjawabkan }}</td>
                        <td>{{ $lab->ketua_staf_mudah_dihubungi }}</td>
                        <td>{{ $lab->sikap_peduli_staf }}</td>
                        <td>{{ $lab->sarpras_lengkap }}</td>
                        <td>{{ $lab->saran_kritik ?? '-' }}</td>
                        <td>{{ $lab->program_studi }}</td>
                        <td>{{ $lab->jenis_kelamin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </form> 
    </div>
</div>

@endsection

