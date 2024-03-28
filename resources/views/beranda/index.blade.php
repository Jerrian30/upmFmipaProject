@extends('layouts.master')

@section('title', 'Beranda')
@section('page', 'Beranda')
@section('content')
<div class="row">

<!-- Menggunakan container-fluid -->
    <div class="row text-center">
        <div class="col-12"> <!-- Mengganti class column untuk memenuhi lebar penuh -->
            <div class="card shadow">
                <div class="card-header  d-flex flex-row align-items-center justify-content-between">
                    <img src="{{ asset('images/foto.jpg') }}" style="width: 100%; height: auto;" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection