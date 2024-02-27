@extends('layouts.master')

@section('title', 'Unduh -> Lihat Unduhan')
@section('page', 'Unduh -> Lihat Unduhan')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Detail Unduhan</h2>
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Link Unduhan:</h5>
            <!-- Menambahkan class "text-info" untuk link, membuatnya lebih menarik -->
            <p class="card-text"><a href="{{ $unduh->link }}" class="text-info" target="_blank">{{ $unduh->link }}</a></p>

            <h5 class="card-title">Deskripsi:</h5>
            <p class="card-text">{{ $unduh->deskripsi }}</p>

            <!-- Menggunakan button dengan icon untuk membuat tampilan lebih menarik -->
            <a href="{{ route('unduhs.index') }}" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>

@endsection
