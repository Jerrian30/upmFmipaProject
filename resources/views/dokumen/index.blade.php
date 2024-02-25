@extends('layouts.master')
@section('title', 'Dokumen SPMI')
@section('page', 'Dokumen SPMI')
@section('css')
<style>
    .btn-custom {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        margin-bottom: 20px; /* Menambahkan sedikit jarak antar tombol */
    }
    .btn-custom:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .text-light-custom {
        color: #fff !important; /* Memastikan teks tetap berwarna putih */
    }
</style>
@endsection
@section('content')



<div class="row">
    <div class="col-lg-12 text-center">
        <a href="https://drive.google.com/file/d/1ixmKygAKcImLFl8AyoVfpG9sTlYn_zbP/view?usp=sharing" class="btn btn-primary btn-block btn-custom">
            <i class="fa fa-globe" aria-hidden="true"></i> BUKU I <br> KEBIJAKAN
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <a href="https://drive.google.com/file/d/1wLC7JfIbFqoNa318V6IN2z9F3bfjL1PP/view?usp=sharing" class="btn btn-success btn-block btn-custom">
            <i class="fa fa-university" aria-hidden="true"></i> BUKU IIA <br> MANUAL STANDAR UNIB
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <a href="https://drive.google.com/file/d/1Iv1RmMmi4o6F-2lLhmUvjmzHmnxFLZYc/view?usp=sharing" class="btn btn-danger btn-block btn-custom">
            <i class="fa fa-book" aria-hidden="true"></i> BUKU II <br> MANUAL STANDAR SN-DIKTI
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <a href="https://drive.google.com/file/d/1Z5Q-JT0tpLVDEih7rmkQZVNx3G9VOH_f/view?usp=sharing" class="btn btn-warning btn-block btn-custom">
            <i class="fa fa-clipboard" aria-hidden="true"></i> BUKU III <br> STANDAR SN-DIKTI
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <a href="https://drive.google.com/file/d/1UlDYDPFMVqMswR44jfVDFXkD1RL7sVZy/view?usp=sharing" class="btn btn-info btn-block btn-custom">
            <i class="fas fa-pencil-alt" aria-hidden="true"></i> BUKU IV <br> SOP FORMULIR STANDAR SN-DIKTI
        </a>
    </div>
</div>

@endsection
