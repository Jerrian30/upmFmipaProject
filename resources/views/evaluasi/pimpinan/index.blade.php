@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Pimpinan Fakultas')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Pimpinan Fakultas')
{{-- java script --}}
@section('js')

@include('grafik.pimpinan.all.js')
@include('grafik.pimpinan.d3keperawatan.js')
@include('grafik.pimpinan.d3kebidanan.js')
@include('grafik.pimpinan.d3labsains.js')
@include('grafik.pimpinan.d3farmasi.js')


    <script>
        document.getElementById('programStudi').addEventListener('change', function() {
            var value = this.value;

            var allContainers = document.querySelectorAll('.allContainer');
            allContainers.forEach(function(container) {
                container.style.display = (value === 'all') ? 'block' : 'none';
            });

            var farmasiContainers = document.querySelectorAll('.farmasiContainer');
            farmasiContainers.forEach(function(container) {
                container.style.display = (value === 'd3farmasi') ? 'block' : 'none';
            });

            var kebidananContainer = document.querySelectorAll('.kebidananContainer');
            kebidananContainer.forEach(function(container) {
                container.style.display = (value === 'd3kebidanan') ? 'block' : 'none';
            });

            var keperawatanContainer = document.querySelectorAll('.keperawatanContainer');
            keperawatanContainer.forEach(function(container) {
                container.style.display = (value === 'd3keperawatan') ? 'block' : 'none';
            });

            var labSainsContainer = document.querySelectorAll('.labsainsContainer');
            labSainsContainer.forEach(function(container) {
                container.style.display = (value === 'd3labsains') ? 'block' : 'none';
            });
        });

    </script>


@endsection

{{-- css --}}
@section('css')

@endsection
{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('pimpinan.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        <select class="form-control" id="programStudi" name="programStudi">
            <option value="" disabled selected>Pilih</option>
            <option value="all">Semua</option>
            <option value="d3farmasi">Dekan</option>
            <option value="d3kebidanan">Wakil Dekan Bidang Akademik</option>
            <option value="d3keperawatan">Wakil Dekan Bidang Sumber Daya</option>
            <option value="d3labsains">Wakil Dekan Kemahasiswaan</option>
        </select>
        <br>
    
        @include('grafik.pimpinan.all.view')
        @include('grafik.pimpinan.d3keperawatan.view')
        @include('grafik.pimpinan.d3kebidanan.view')
        @include('grafik.pimpinan.d3labsains.view')
        @include('grafik.pimpinan.d3farmasi.view')

    </div>
</div>
@endsection