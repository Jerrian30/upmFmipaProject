@extends('layouts.master')
@section('title', 'Evaluasi -> Dosen')
@section('page', 'Evaluasi -> Dosen')
{{-- java script --}}
@section('js')

@include('grafik.dosen.d3farmasi.js')
@include('grafik.dosen.s1farmasi.js')
@include('grafik.dosen.s1matematika.js')
{{--@include('grafik.dosen.s1biologi.js')
@include('grafik.dosen.d3kebidanan.js')
@include('grafik.dosen.d3keperawatan.js') --}}
@include('grafik.dosen.d3labsains.js')
@include('grafik.dosen.s1statistika.js') 
@include('grafik.dosen.s1kimia.js')
@include('grafik.dosen.s2kimia.js') 
@include('grafik.dosen.s1fisika.js')

    <script>
        document.getElementById('programStudi').addEventListener('change', function() {
            var value = this.value;

            var farmasiContainers = document.querySelectorAll('.farmasiContainer');
            farmasiContainers.forEach(function(container) {
                container.style.display = (value === 'd3farmasi') ? 'block' : 'none';
            });

            var fisikaContainers = document.querySelectorAll('.fisikaContainer');
            fisikaContainers.forEach(function(container) {
                container.style.display = (value === 's1fisika') ? 'block' : 'none';
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

            var statistikaContainer = document.querySelectorAll('.s1kimiaContainer');
            statistikaContainer.forEach(function(container) {
                container.style.display = (value === 's1kimia') ? 'block' : 'none';
            });

            var statistikaContainer = document.querySelectorAll('.s2kimiaContainer');
            statistikaContainer.forEach(function(container) {
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
        <a href="{{ route('dosen.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        <select class="form-control" id="programStudi" name="programStudi">
            <option value="" disabled selected>Pilih</option>
            <option value="s2kimia">S2 Kimia</option>
            <option value="s1biologi">S1 Biologi</option>
            <option value="s1farmasi">S1 Farmasi</option>
            <option value="s1fisika">S1 Fisika</option>
            <option value="s1kimia">S1 Kimia</option>
            <option value="s1matematika">S1 Matematika</option>
            <option value="s1statistika">S1 Statistika</option>
            <option value="d3farmasi">D3 Farmasi</option>
            <option value="d3kebidanan">D3 Kebidanan</option>
            <option value="d3keperawatan">D3 Keperawatan</option>
            <option value="d3labsains">D3 Lab Sains</option>
        </select>
        <br>
    
        @include('grafik.dosen.d3farmasi.view')
        @include('grafik.dosen.s1farmasi.view')
        @include('grafik.dosen.s1kimia.view')
        @include('grafik.dosen.s1statistika.view')
        @include('grafik.dosen.d3labsains.view')
        @include('grafik.dosen.s1matematika.view')
        {{-- 
        @include('grafik.dosen.d3kebidanan.view')
        @include('grafik.dosen.s1biologi.view')
        @include('grafik.dosen.d3keperawatan.view')

        --}}
        @include('grafik.dosen.s2kimia.view') 
        @include('grafik.dosen.s1fisika.view') 
    </div>
</div>
@endsection