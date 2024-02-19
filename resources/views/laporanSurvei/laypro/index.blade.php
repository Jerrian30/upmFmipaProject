@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Prodi')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Prodi')

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

    <form action="{{ route('laypro.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
                    <th>Status</th>
                    <th>Program Studi</th>
                    <th>Kebersihan Ruangan</th>
                    <th>Fasilitas Perkuliahan</th>
                    <th>Fasilitas Laboratorium</th>
                    <th>Informasi Perkuliahan</th>
                    <th>Urus Transkrip</th>
                    <th>Urus KRS KHS</th>
                    <th>Respon Keluhan</th>
                    <th>Penetapan Dosen</th>
                    <th>Dukungan Kegiatan</th>
                    <th>Dukungan Studi</th>
                    <th>Informasi Ilmiah</th>
                    <th>Ketua Berpakaian Rapi</th>
                    <th>Ketua Responsif</th>
                    <th>Ketua Mudah Dihubungi</th>
                    <th>Petugas Ramah</th>
                    <th>Petugas IT</th>
                    <th>Saran/Kritik</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Status</th>
                    <th>Program Studi</th>
                    <th>Kebersihan Ruangan</th>
                    <th>Fasilitas Perkuliahan</th>
                    <th>Fasilitas Laboratorium</th>
                    <th>Informasi Perkuliahan</th>
                    <th>Urus Transkrip</th>
                    <th>Urus KRS KHS</th>
                    <th>Respon Keluhan</th>
                    <th>Penetapan Dosen</th>
                    <th>Dukungan Kegiatan</th>
                    <th>Dukungan Studi</th>
                    <th>Informasi Ilmiah</th>
                    <th>Ketua Berpakaian Rapi</th>
                    <th>Ketua Responsif</th>
                    <th>Ketua Mudah Dihubungi</th>
                    <th>Petugas Ramah</th>
                    <th>Petugas IT</th>
                    <th>Saran/Kritik</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($laypros as $laypro)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $laypro->timestamp }}</td>
                    <td>{{ $laypro->status }}</td>
                    <td>{{ $laypro->program_studi }}</td>
                    <td>{{ $laypro->kebersihan_ruangan }}</td>
                    <td>{{ $laypro->fasil_perkuliahan }}</td>
                    <td>{{ $laypro->fasil_lab }}</td>
                    <td>{{ $laypro->info_perkuliahan }}</td>
                    <td>{{ $laypro->urus_transkrip }}</td>
                    <td>{{ $laypro->urus_krs_khs }}</td>
                    <td>{{ $laypro->respon_keluhan }}</td>
                    <td>{{ $laypro->penetapan_dosen }}</td>
                    <td>{{ $laypro->dukung_kegiatan }}</td>
                    <td>{{ $laypro->dukung_studi }}</td>
                    <td>{{ $laypro->info_ilmiah }}</td>
                    <td>{{ $laypro->ketua_berpakaian_rapi }}</td>
                    <td>{{ $laypro->ketua_responsif }}</td>
                    <td>{{ $laypro->ketua_mudah_dihubungi }}</td>
                    <td>{{ $laypro->petugas_ramah }}</td>
                    <td>{{ $laypro->petugas_it }}</td>
                    <td>{{ $laypro->saran_kritik }}</td>
                    <td>{{ $laypro->jenis_kelamin }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection

