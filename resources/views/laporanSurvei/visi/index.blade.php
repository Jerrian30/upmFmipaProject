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

    <form action="{{ route('visi.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
    <form action="{{ route('visi.delete') }}" method="POST" id="deleteForm">
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
                        <th>Misi Tujuan Strategi Dukung Visi</th>
                        <th>VMTS Dukung Atmosfer Akademik</th>
                        <th>Yakin Capai VMTS</th>
                        <th>Estimasi Waktu Capai VMTS</th>
                    </tr>
                    
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
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
                    <th>Misi Tujuan Strategi Dukung Visi</th>
                    <th>VMTS Dukung Atmosfer Akademik</th>
                    <th>Yakin Capai VMTS</th>
                    <th>Estimasi Waktu Capai VMTS</th>
                </tr>
                
            </tfoot>
            <tbody>
                @foreach($visis as $visi)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $visi->id }}"></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $visi->timestamp }}</td>
                        <td>{{ $visi->program_studi }}</td>
                        <td>{{ $visi->status_di_universitas }}</td>
                        <td>{{ $visi->lama_bergabung }}</td>
                        <td>{{ $visi->mengetahui_vmts }}</td>
                        <td>{{ $visi->sumber_informasi_vmts }}</td>
                        <td>{{ $visi->ikut_sosialisasi_vmts }}</td>
                        <td>{{ $visi->pemahaman_visi }}</td>
                        <td>{{ $visi->pemahaman_misi }}</td>
                        <td>{{ $visi->visi_sesuai_tuntutan_kerja }}</td>
                        <td>{{ $visi->visi_realistis }}</td>
                        <td>{{ $visi->misi_sesuai_tridharma }}</td>
                        <td>{{ $visi->misi_tujuan_strategi_dukung_visi }}</td>
                        <td>{{ $visi->vmts_dukung_atmosfer_akademik }}</td>
                        <td>{{ $visi->yakin_capai_vmts }}</td>
                        <td>{{ $visi->estimasi_waktu_capai_vmts }}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        </form> 
    </div>
</div>

@endsection

