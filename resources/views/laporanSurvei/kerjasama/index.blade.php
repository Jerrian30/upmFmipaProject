@extends('layouts.master')
@section('title', 'Survei Mitra Kerjasama')
@section('page', 'Laporan Survei ->  Mitra Kerjasama')

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

    <form action="{{ route('kerjasama.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('kerjasama.delete') }}" method="POST" id="deleteForm">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Nama Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Email Instansi</th>
                    <th>No Telepon Instansi</th>
                    <th>Bidang Kerjasama</th>
                    <th>Program Studi</th>
                    <th>Info Layanan</th>
                    <th>Kebersihan</th>
                    <th>Respon Kebutuhan</th>
                    <th>Pendampingan Kerjasama</th>
                    <th>Manfaat Kerjasama</th>
                    <th>Kesesuaian Perjanjian</th>
                    <th>Proses Pelayanan SOP</th>
                    <th>Sosialisasi Aturan</th>
                    <th>Aplikasi Hasil Kerjasama</th>
                    <th>Sumberdaya Pendukung</th>
                    <th>Libatkan Mitra Laporan</th>
                    <th>Saran/Kritik</th>
                </tr>
                
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Nama Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Email Instansi</th>
                    <th>No Telepon Instansi</th>
                    <th>Bidang Kerjasama</th>
                    <th>Program Studi</th>
                    <th>Info Layanan</th>
                    <th>Kebersihan</th>
                    <th>Respon Kebutuhan</th>
                    <th>Pendampingan Kerjasama</th>
                    <th>Manfaat Kerjasama</th>
                    <th>Kesesuaian Perjanjian</th>
                    <th>Proses Pelayanan SOP</th>
                    <th>Sosialisasi Aturan</th>
                    <th>Aplikasi Hasil Kerjasama</th>
                    <th>Sumberdaya Pendukung</th>
                    <th>Libatkan Mitra Laporan</th>
                    <th>Saran/Kritik</th>
                </tr>
                
            </tfoot>
            <tbody>
                @foreach($kerjasamas as $kerjasama)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $kerjasama->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kerjasama->timestamp }}</td>
                    <td>{{ $kerjasama->nama_instansi }}</td>
                    <td>{{ $kerjasama->alamat_instansi }}</td>
                    <td>{{ $kerjasama->email_instansi }}</td>
                    <td>{{ $kerjasama->no_telepon_instansi }}</td>
                    <td>{{ $kerjasama->bidang_kerjasama}}</td>
                    <td>{{ $kerjasama->program_studi }}</td>
                    <td>{{ $kerjasama->info_layanan }}</td>
                    <td>{{ $kerjasama->kebersihan }}</td>
                    <td>{{ $kerjasama->respon_kebutuhan }}</td>
                    <td>{{ $kerjasama->pendampingan_kerjasama }}</td>
                    <td>{{ $kerjasama->manfaat_kerjasama }}</td>
                    <td>{{ $kerjasama->kesesuaian_perjanjian }}</td>
                    <td>{{ $kerjasama->proses_pelayanan_sop }}</td>
                    <td>{{ $kerjasama->sosialisasi_aturan }}</td>
                    <td>{{ $kerjasama->aplikasi_hasil_kerjasama }}</td>
                    <td>{{ $kerjasama->sumberdaya_pendukung }}</td>
                    <td>{{ $kerjasama->libatkan_mitra_laporan }}</td>
                    <td>{{ $kerjasama->saran_kritik }}</td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </form>
    </div>
</div>

@endsection

