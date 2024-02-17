@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')
{{-- java script --}}
@section('js')

@include('grafik.kemahasiswaan.s1matematika.js')
{{-- @include('grafik.kemahasiswaan.d3farmasi.js')
@include('grafik.kemahasiswaan.s1farmasi.js')

@include('grafik.kemahasiswaan.s1geofisika.js')
@include('grafik.kemahasiswaan.d3kebidanan.js')
@include('grafik.kemahasiswaan.d3keperawatan.js')
@include('grafik.kemahasiswaan.s1statistika.js') 
@include('grafik.kemahasiswaan.s2statistika.js')
@include('grafik.kemahasiswaan.s1biologi.js')
@include('grafik.kemahasiswaan.d3labsains.js')
@include('grafik.kemahasiswaan.s1kimia.js')
@include('grafik.kemahasiswaan.s2kimia.js') 
@include('grafik.kemahasiswaan.s1fisika.js')
@include('grafik.kemahasiswaan.all.js') --}}

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

            var fisikaContainers = document.querySelectorAll('.fisikaContainer');
            fisikaContainers.forEach(function(container) {
                container.style.display = (value === 's1fisika') ? 'block' : 'none';
            });

            var geofisikaContainers = document.querySelectorAll('.geofisikaContainer');
            geofisikaContainers.forEach(function(container) {
                container.style.display = (value === 's1geofisika') ? 'block' : 'none';
            });
            
            var s1farmasiContainers = document.querySelectorAll('.s1farmasiContainer');
            s1farmasiContainers.forEach(function(container) {
                container.style.display = (value === 's1farmasi') ? 'block' : 'none';
            });

            var matematikaContainers = document.querySelectorAll('.matematikaContainer');
            matematikaContainers.forEach(function(container) {
                container.style.display = (value === 's1matematika') ? 'block' : 'none';
            });

            var biologiContainers = document.querySelectorAll('.biologiContainer');
            biologiContainers.forEach(function(container) {
                container.style.display = (value === 's1biologi') ? 'block' : 'none';
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

            var statistikaContainer = document.querySelectorAll('.statistikaContainer');
            statistikaContainer.forEach(function(container) {
                container.style.display = (value === 's1statistika') ? 'block' : 'none';
            });

            var s2statistikaContainer = document.querySelectorAll('.s2statistikaContainer');
            s2statistikaContainer.forEach(function(container) {
                container.style.display = (value === 's2statistika') ? 'block' : 'none';
            });

            var s1kimiaContainer = document.querySelectorAll('.s1kimiaContainer');
            s1kimiaContainer.forEach(function(container) {
                container.style.display = (value === 's1kimia') ? 'block' : 'none';
            });

            var s2kimiaContainer = document.querySelectorAll('.s2kimiaContainer');
            s2kimiaContainer.forEach(function(container) {
                container.style.display = (value === 's2kimia') ? 'block' : 'none';
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
        <a href="{{ route('kemahasiswaan.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        <select class="form-control" id="programStudi" name="programStudi">
            <option value="" disabled selected>Pilih</option>
            <option value="all">Semua</option>
            <option value="s2kimia">S2 Kimia</option>
            <option value="s2statistika">S2 Statistika</option>
            <option value="s1biologi">S1 Biologi</option>
            <option value="s1farmasi">S1 Farmasi</option>
            <option value="s1fisika">S1 Fisika</option>
            <option value="s1geofisika">S1 Geofisika</option>
            <option value="s1kimia">S1 Kimia</option>
            <option value="s1matematika">S1 Matematika</option>
            <option value="s1statistika">S1 Statistika</option>
            <option value="d3farmasi">D3 Farmasi</option>
            <option value="d3kebidanan">D3 Kebidanan</option>
            <option value="d3keperawatan">D3 Keperawatan</option>
            <option value="d3labsains">D3 Lab Sains</option>
        </select>
        <br>
    
        @include('grafik.kemahasiswaan.s1matematika.view')
        {{-- 
        @include('grafik.kemahasiswaan.all.view')
        @include('grafik.kemahasiswaan.d3keperawatan.view')
        @include('grafik.kemahasiswaan.d3farmasi.view')
        @include('grafik.kemahasiswaan.s1farmasi.view')
        @include('grafik.kemahasiswaan.s1fisika.view') 
        @include('grafik.kemahasiswaan.s1geofisika.view')
        @include('grafik.kemahasiswaan.s1kimia.view')
        @include('grafik.kemahasiswaan.s2kimia.view') 
        @include('grafik.kemahasiswaan.d3kebidanan.view')
        @include('grafik.kemahasiswaan.s1statistika.view')
        @include('grafik.kemahasiswaan.s2statistika.view')
        @include('grafik.kemahasiswaan.s1biologi.view')
        @include('grafik.kemahasiswaan.d3labsains.view') --}}
    </div>
</div>
@endsection