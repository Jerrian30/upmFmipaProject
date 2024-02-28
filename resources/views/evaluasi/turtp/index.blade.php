@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian TURTP')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian TURTP')
{{-- java script --}}
@section('js')


@include('grafik.turtp.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('turtp.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.turtp.all.view')

    </div>
</div>
@endsection