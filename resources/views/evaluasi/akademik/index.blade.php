@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Akademik')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian Akademik')
{{-- java script --}}
@section('js')


@include('grafik.akademik.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('akademik.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.akademik.all.view')

    </div>
</div>
@endsection@section('js')


@include('grafik.akademik.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('akademik.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.akademik.all.view')

    </div>
</div>
@endsection