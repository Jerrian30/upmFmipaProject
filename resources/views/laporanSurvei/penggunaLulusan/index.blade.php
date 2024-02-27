@extends('layouts.master')
@section('title', 'Survei Pengguna Lulusan')
@section('page', 'Laporan Survei ->  Pengguna Lulusan')

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

    <form action="{{ route('penggunaLulusan.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
        <form id="deleteForm" action="{{ route('penggunaLulusan.delete') }}" method="POST">
            @csrf <!-- Sesuaikan dengan teknologi backend Anda, contoh ini menggunakan Blade Laravel -->
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Kejujuran, etika pergaulan, keramahan</th>
                    <th>Kemampuan dan menguasai bidang keilmuannya</th>
                    <th>Kemampuan berbahasa asing</th>
                    <th>Kemampuan menggunakan TIK</th>
                    <th>Kemampuan berkomunikasi</th>
                    <th>Kemampuan kerjasama dalam tim</th>
                    <th>Kedisiplinan</th>
                    <th>Rasa percaya diri</th>
                    <th>Rasa tanggungjawab</th>
                    <th>Kemampuan menyampaikan ide</th>
                    <th>Keunggulan alumni UNIB</th>
                    <th>Kelemahan/kekurangan alumni UNIB</th>
                    <th>Kualitas alumni UNIB</th>
                    <th>Kompetensi penting untuk alumni UNIB</th>
                    <th>Saran pemantapan kompetensi alumni UNIB</th>
                    <th>Saran terhadap lembaga UNIB</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Kejujuran, etika pergaulan, keramahan</th>
                    <th>Kemampuan dan menguasai bidang keilmuannya</th>
                    <th>Kemampuan berbahasa asing</th>
                    <th>Kemampuan menggunakan TIK</th>
                    <th>Kemampuan berkomunikasi</th>
                    <th>Kemampuan kerjasama dalam tim</th>
                    <th>Kedisiplinan</th>
                    <th>Rasa percaya diri</th>
                    <th>Rasa tanggungjawab</th>
                    <th>Kemampuan menyampaikan ide</th>
                    <th>Keunggulan alumni UNIB</th>
                    <th>Kelemahan/kekurangan alumni UNIB</th>
                    <th>Kualitas alumni UNIB</th>
                    <th>Kompetensi penting untuk alumni UNIB</th>
                    <th>Saran pemantapan kompetensi alumni UNIB</th>
                    <th>Saran terhadap lembaga UNIB</th>
                </tr>
            </tfoot>
            
            <tbody>
                @foreach($penggunaLulusans as $penggunaLulusan)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $penggunaLulusan->id }}"></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penggunaLulusan->timestamp }}</td>
                        <td>{{ $penggunaLulusan->program_studi }}</td>
                        <td>{{ $penggunaLulusan->kejujuran_etika }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_bidang_keilmuan }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_bahasa_asing }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_teknologi_informasi }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_berkomunikasi }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_kerjasama_tim }}</td>
                        <td>{{ $penggunaLulusan->kedisiplinan }}</td>
                        <td>{{ $penggunaLulusan->kepercayaan_diri }}</td>
                        <td>{{ $penggunaLulusan->rasa_tanggungjawab }}</td>
                        <td>{{ $penggunaLulusan->kemampuan_menyampaikan_ide }}</td>
                        <td>{{ $penggunaLulusan->keunggulan_alumni ?? '-' }}</td>
                        <td>{{ $penggunaLulusan->kelemahan_alumni ?? '-' }}</td>
                        <td>{{ $penggunaLulusan->kualitas_alumni ?? '-' }}</td>
                        <td>{{ $penggunaLulusan->kompetensi_penting ?? '-' }}</td>
                        <td>{{ $penggunaLulusan->saran_pemantapan_kompetensi ?? '-' }}</td>
                        <td>{{ $penggunaLulusan->saran_lembaga_unib ?? '-' }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        {{-- </table> --}}
    </div>
</div>

@endsection

