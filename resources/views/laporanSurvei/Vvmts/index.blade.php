@extends('layouts.master')
@section('title', 'Survei VMTS')
@section('page', 'Laporan Survei ->  VMTS')

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

    <form action="{{ route('vmts.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
                    <th>Program Studi/Unit Kerja/Lainnya</th>
                    <th>Status di Universitas</th>
                    <th>Lama Bergabung</th>
                    <th>Mengetahui VMTS</th>
                    <th>Sumber Informasi VMTS</th>
                    <th>Ikut Sosialisasi VMTS</th>
                    <th>Pemahaman Visi</th>
                    <th>Pemahaman Misi</th>
                    <th>Visi Sesuai Tuntutan Kerja</th>
                    <th>Visi Realistis</th>
                    <th>Misi Sesuai Tridharma</th>
                    <th>Misi, Tujuan, Strategi Dukung Visi</th>
                    <th>VMTS Dukung Atmosfer Akademik</th>
                    <th>Yakin Capai VMTS</th>
                    <th>Estimasi Waktu Capai VMTS</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi/Unit Kerja/Lainnya</th>
                    <th>Status di Universitas</th>
                    <th>Lama Bergabung</th>
                    <th>Mengetahui VMTS</th>
                    <th>Sumber Informasi VMTS</th>
                    <th>Ikut Sosialisasi VMTS</th>
                    <th>Pemahaman Visi</th>
                    <th>Pemahaman Misi</th>
                    <th>Visi Sesuai Tuntutan Kerja</th>
                    <th>Visi Realistis</th>
                    <th>Misi Sesuai Tridharma</th>
                    <th>Misi, Tujuan, Strategi Dukung Visi</th>
                    <th>VMTS Dukung Atmosfer Akademik</th>
                    <th>Yakin Capai VMTS</th>
                    <th>Estimasi Waktu Capai VMTS</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($vmtss as $vmts)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $vmts->timestamp }}</td>
                        <td>{{ $vmts->program_studi}}</td>
                        <td>{{ $vmts->status_di_universitas }}</td>
                        <td>{{ $vmts->lama_bergabung }}</td>
                        <td>{{ $vmts->mengetahui_vmts }}</td>
                        <td>{{ $vmts->sumber_informasi_vmts }}</td>
                        <td>{{ $vmts->ikut_sosialisasi_vmts }}</td>
                        <td>{{ $vmts->pemahaman_visi }}</td>
                        <td>{{ $vmts->pemahaman_misi }}</td>
                        <td>{{ $vmts->visi_sesuai_tuntutan_kerja }}</td>
                        <td>{{ $vmts->visi_realistis }}</td>
                        <td>{{ $vmts->misi_sesuai_tridharma }}</td>
                        <td>{{ $vmts->misi_tujuan_strategi_dukung_visi }}</td>
                        <td>{{ $vmts->vmts_dukung_atmosfer_akademik }}</td>
                        <td>{{ $vmts->yakin_capai_vmts }}</td>
                        <td>{{ $vmts->estimasi_waktu_capai_vmts }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

