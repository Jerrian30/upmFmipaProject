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
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
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
                    <tr>
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
                    

                </tr>
            </tfoot>
            <tbody>
                @foreach($kemahasiswaans as $kemahasiswaan)
                <tr>
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

                    {{--             $table->unsignedTinyInteger('info_layanan')->nullable(); // 1. Ketersediaan, kejelasan dan kemudahan memperoleh informasi layanan
            $table->unsignedTinyInteger('suasana_ruangan')->nullable(); // 2. Suasana ruangan yang bersih dan nyaman
            $table->unsignedTinyInteger('staff_penampilan')->nullable(); // 3. Staff berpenampilan bersih dan rapih serta berperilaku sopan dan ramah
            $table->unsignedTinyInteger('staff_pengetahuan')->nullable(); // 4. Staf memiliki pengetahuan yang baik tentang layanan yang dibutuhkan
            $table->unsignedTinyInteger('staff_sop')->nullable(); // 5. Staf mampu memberikan pelayanan sesuai dengan SOP
            $table->unsignedTinyInteger('staff_responsive')->nullable(); // 6. Staf menunjukkan sikap responsive dan bertanggung jawab
            $table->unsignedTinyInteger('staff_dapat_dihubungi')->nullable(); // 7. Staf dapat ditemui/dihubungi dengan mudah
            $table->unsignedTinyInteger('staff_terbuka_kritik')->nullable(); // 8. Staf terbuka dengan kritik/saran
            $table->text('saran_kritik')->nullable(); // Saran/Kritik
            $table->string('jenis_kelamin', 10)->nullable(); // Jenis Kelamin
            $table->string('program_studi_unit_kerja')->nullable(); // Program Studi/Unit Kerja/Lainnya
            $table->string('lama_bergabung')->nullable(); // Berapa lama sudah bergabung/mengenal UNIB --}}
                </tr>
                @endforeach
            </tbody>
    </div>
</div>

@endsection

