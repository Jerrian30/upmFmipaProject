@extends('layouts.master')
@section('title', 'Evaluasi -> Tracer Studi')
@section('page', 'Evaluasi -> Tracer Studi')
{{-- java script --}}
@section('js')

{{-- @include('grafik.tracer.d3farmasi.js')
@include('grafik.tracer.s1farmasi.js')
@include('grafik.tracer.s1matematika.js')
@include('grafik.tracer.s1statistika.js') 
@include('grafik.tracer.s2statistika.js')

@include('grafik.tracer.d3keperawatan.js')
@include('grafik.tracer.d3labsains.js')
@include('grafik.tracer.s1kimia.js')
@include('grafik.tracer.s2kimia.js') 
@include('grafik.tracer.s1geofisika.js')
@include('grafik.tracer.s1biologi.js')
@include('grafik.tracer.s2biologi.js')
@include('grafik.tracer.s1fisika.js') --}}
@include('grafik.tracer.d3kebidanan.js')
@include('grafik.tracer.all.js')

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

            var s2biologiContainer = document.querySelectorAll('.s2biologiContainer');
            s2biologiContainer.forEach(function(container) {
                container.style.display = (value === 's2biologi') ? 'block' : 'none';
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
        <a href="{{ route('tracer.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        <select class="form-control" id="programStudi" name="programStudi">
            <option value="" disabled selected>Pilih</option>
            <option value="all">Semua</option>
            <option value="s2biologi">S2 Biologi</option>
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
    
        @include('grafik.tracer.all.view')
        @include('grafik.tracer.d3kebidanan.view')
        {{-- @include('grafik.tracer.s1matematika.view')

        @include('grafik.tracer.s1statistika.view')
        @include('grafik.tracer.s2statistika.view')
        @include('grafik.tracer.s2biologi.view')
        @include('grafik.tracer.d3farmasi.view')
        @include('grafik.tracer.s1farmasi.view')
        @include('grafik.tracer.s1kimia.view')
        @include('grafik.tracer.s2kimia.view') 
        @include('grafik.tracer.d3keperawatan.view')
        @include('grafik.tracer.d3labsains.view')  
        @include('grafik.tracer.s1fisika.view') 
        @include('grafik.tracer.s1geofisika.view')
        @include('grafik.tracer.s1biologi.view') --}}
    </div>
</div>
@endsection