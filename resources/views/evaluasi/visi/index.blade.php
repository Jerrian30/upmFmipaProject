@extends('layouts.master')
@section('title', 'Evaluasi -> VMTS')
@section('page', 'Evaluasi -> VMTS')
{{-- java script --}}
@section('js')


@include('grafik.visi.all.js')

@endsection


{{-- content --}}
@section('content')
<div class="row">
    <div class="container mt-1">
        <a href="{{ route('visi.table') }}" class="btn btn-primary">Lihat Penjelasan Tiap Butir Pertanyaan</a>
        <br><br>
        
        @include('grafik.visi.all.view')

    </div>
</div>
@endsection