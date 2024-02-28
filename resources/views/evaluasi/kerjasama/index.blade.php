@extends('layouts.master')
@section('title', 'Evaluasi -> Mitra Kerjasama')
@section('page', 'Evaluasi -> Mitra Kerjasama')
{{-- java script --}}
@section('js')


@include('grafik.kerjasama.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('kerjasama.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.kerjasama.all.view')

    </div>
</div>
@endsection