@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Pimpinan Fakultas')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Pimpinan Fakultas')

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

    <form action="{{ route('pimpinan.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('akademik.delete') }}" method="POST" id="deleteForm">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status</th>
                    <th>Mudah Dihubungi</th>
                    <th>Ramah & Sopan</th>
                    <th>Rencana Kerja</th>
                    <th>Komitmen VMTS</th>
                    <th>Kebijakan & Peraturan</th>
                    <th>Prinsip Pengelolaan</th>
                    <th>Karakteristik Kepemimpinan</th>
                    <th>Solusi Cepat & Tepat</th>
                    <th>Terbuka untuk Kritik/Saran</th>
                    <th>Saran/Kritik</th>
                    <th>Pimpinan Dinilai</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status</th>
                    <th>Mudah Dihubungi</th>
                    <th>Ramah & Sopan</th>
                    <th>Rencana Kerja</th>
                    <th>Komitmen VMTS</th>
                    <th>Kebijakan & Peraturan</th>
                    <th>Prinsip Pengelolaan</th>
                    <th>Karakteristik Kepemimpinan</th>
                    <th>Solusi Cepat & Tepat</th>
                    <th>Terbuka untuk Kritik/Saran</th>
                    <th>Saran/Kritik</th>
                    <th>Pimpinan Dinilai</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($pimpinans as $pimpinan)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $pimpinan->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pimpinan->timestamp }}</td>
                    <td>{{ $pimpinan->status }}</td>
                    <td>{{ $pimpinan->mudah_dihubungi }}</td>
                    <td>{{ $pimpinan->ramah_dan_sopan }}</td>
                    <td>{{ $pimpinan->rencana_kerja_jelas }}</td>
                    <td>{{ $pimpinan->komitmen_vmts }}</td>
                    <td>{{ $pimpinan->menegakkan_kebijakan }}</td>
                    <td>{{ $pimpinan->pengelolaan_prinsip }}</td>
                    <td>{{ $pimpinan->karakteristik_kepemimpinan }}</td>
                    <td>{{ $pimpinan->memberikan_solusi }}</td>
                    <td>{{ $pimpinan->terbuka_kritik_saran }}</td>
                    <td>{{ $pimpinan->saran_kritik }}</td>
                    <td>{{ $pimpinan->pimpinan_dinilai }}</td>
                    <td>{{ $pimpinan->jenis_kelamin }}</td>
                    <td>{{ $pimpinan->program_studi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
    </div>
</div>

@endsection

