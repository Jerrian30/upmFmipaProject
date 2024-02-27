@extends('layouts.master')
@section('title', 'Survei Pengguna Terhadap Kinerja Layanan Subbagian Akademik')
@section('page', 'Laporan Survei ->  Pengguna Terhadap Kinerja Layanan Subbagian Akademik')

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

<script>
    function confirmDelete() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form secara programatik jika pengguna mengonfirmasi
                document.querySelector('form').submit();
                
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
@endsection

@section('content')

<div class="container-fluid">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('akademik.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
                    <th>Status Responden</th>
                    <th>Ketersediaan Informasi</th>
                    <th>Suasana Ruangan</th>
                    <th>Penampilan Staff</th>
                    <th>Ketepatan Layanan</th>
                    <th>Kemudahan Menemui Staff</th>
                    <th>Memberikan Layanan Akademik</th>
                    <th>Keterbukaan Terhadap Kritik/Saran</th>
                    <th>Saran/Kritik</th>
                    <th>Program Studi/Unit Kerja/Lainnya</th>
                    <th>Jenis Kelamin</th>
                </tr>
                
            </thead>
            <tfoot class="text-center">
                <tr>
                    <tr>
                        <th><input type="checkbox" id="checkAll"></th>
                        <th>#</th>
                        <th>Timestamp</th>
                        <th>Status Responden</th>
                        <th>Ketersediaan Informasi</th>
                        <th>Suasana Ruangan</th>
                        <th>Penampilan Staff</th>
                        <th>Ketepatan Layanan</th>
                        <th>Kemudahan Menemui Staff</th>
                        <th>Memberikan Layanan Akademik</th>
                        <th>Keterbukaan Terhadap Kritik/Saran</th>
                        <th>Saran/Kritik</th>
                        <th>Program Studi/Unit Kerja/Lainnya</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                    

                </tr>
            </tfoot>
            <tbody>
                @foreach($akademiks as $akademik)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $akademik->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $akademik->timestamp }}</td>
                    <td>{{ $akademik->status }}</td>
                    <td>{{ $akademik->info_layanan }}</td>
                    <td>{{ $akademik->suasana_ruangan }}</td>
                    <td>{{ $akademik->staff_penampilan }}</td>
                    <td>{{ $akademik->ketepatan_layanan }}</td>
                    <td>{{ $akademik->staff_mudah_ditemui }}</td>
                    <td>{{ $akademik->layanan_akademik }}</td>
                    <td>{{ $akademik->staff_terbuka_kritik }}</td>
                    <td>{{ $akademik->saran_kritik }}</td>
                    <td>{{ $akademik->program_studi}}</td>
                    <td>{{ $akademik->jenis_kelamin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

</div>

@endsection

