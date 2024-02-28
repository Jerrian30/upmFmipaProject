@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan')
{{-- java script --}}
@section('js')


@include('grafik.kemahasiswaan.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('kemahasiswaan.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.kemahasiswaan.all.view')

    </div>
</div>
@endsection