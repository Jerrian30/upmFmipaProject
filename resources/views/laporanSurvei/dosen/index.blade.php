@extends('layouts.master')
@section('title', 'Survei Dosen')
@section('page', 'Laporan Survei ->  Dosen')

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

    <form action="{{ route('dosen.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('dosen.delete') }}" method="POST" id="deleteForm">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Konsistensi Pimpinan</th>
                    <th>Efektivitas Pembagian Tugas</th>
                    <th>Kebijakan Pimpinan</th>
                    <th>Pengelolaan SDM</th>
                    <th>Ketersediaan Fasilitas Sarana</th>
                    <th>Fasilitas Penelitian dan Pengabdian</th>
                    <th>Suasana Perkuliahan</th>
                    <th>Kesempatan Pengembangan Karir</th>
                    <th>Pembagian Beban Kerja</th>
                    <th>Kepuasan Kesejahteraan Dosen</th>
                    <th>Status Responden</th>
                    <th>Ketersediaan Dana Pengembangan</th>
                    <th>Saran dan Kritik</th>
                    <th>Proyeksi VMTS</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Konsistensi Pimpinan</th>
                    <th>Efektivitas Pembagian Tugas</th>
                    <th>Kebijakan Pimpinan</th>
                    <th>Pengelolaan SDM</th>
                    <th>Ketersediaan Fasilitas Sarana</th>
                    <th>Fasilitas Penelitian dan Pengabdian</th>
                    <th>Suasana Perkuliahan</th>
                    <th>Kesempatan Pengembangan Karir</th>
                    <th>Pembagian Beban Kerja</th>
                    <th>Kepuasan Kesejahteraan Dosen</th>
                    <th>Status Responden</th>
                    <th>Ketersediaan Dana Pengembangan</th>
                    <th>Saran dan Kritik</th>
                    <th>Proyeksi VMTS</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($dosens as $dosen)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $dosen->id }}"></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dosen->timestamp}}</td>
                        <td>{{ $dosen->program_studi }}</td>
                        <td>{{ $dosen->konsistensi_pimpinan }}</td>
                        <td>{{ $dosen->efektivitas_pembagian_tugas }}</td>
                        <td>{{ $dosen->kebijakan_pimpinan }}</td>
                        <td>{{ $dosen->pengelolaan_sdm }}</td>
                        <td>{{ $dosen->ketersediaan_fasilitas_sarana }}</td>
                        <td>{{ $dosen->fasilitas_penelitian_pengabdian }}</td>
                        <td>{{ $dosen->suasana_perkuliahan }}</td>
                        <td>{{ $dosen->kesempatan_pengembangan_karir }}</td>
                        <td>{{ $dosen->pembagian_beban_kerja }}</td>
                        <td>{{ $dosen->kepuasan_kesejahteraan_dosen }}</td>
                        <td>{{ $dosen->status_responden }}</td>
                        <td>{{ $dosen->ketersediaan_dana_pengembangan }}</td>
                        <td>{{ $dosen->saran_kritik ?? '-' }}</td>
                        <td>{{ $dosen->proyeksi_vmts ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </form>   
            
    </div>
</div>

@endsection

