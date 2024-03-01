@extends('layouts.master')
@section('title', 'Formulir')
@section('page', 'Formulir')
@section('css')
<style>
    .btn-custom {
        background-color: #007bff; /* Warna biru */
        color: white;
        border: 2px solid transparent;
        padding: 10px 24px;
        font-size: 16px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,.1);
        transition: background-color .3s, box-shadow .3s;
    }
    .btn-custom:hover, .btn-custom:focus {
        background-color: #0056b3; /* Warna biru yang lebih gelap */
        color: white;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0,0,0,.2);
    }
</style>
@endsection

@section('content')

    <h5 class="text-center text-dark">1. DIISI OLEH SEMUA PENGGUNA LAYANAN (Dosen, Mhs, Tendik, Mitra, dll)</h5>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_PimpinanFakultas" class="btn btn-custom btn-block text-light fs-1">A. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA PIMPINAN FAKULTAS (DEKAN dan WAKIL DEKAN)
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_SubbagKepegKeu" class="btn btn-custom btn-block text-light">B. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN SUBBAGIAN KEPEGAWAIAN DAN KEUANGAN FAKULTAS
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_LayananProdi" class="btn btn-custom btn-block text-light">C. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN PROGRAM STUDI(PRODI)
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_LayananLab" class="btn btn-custom btn-block text-light">D. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN LABORATORIUM/ BENGKEL/ STUDIO:
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_SubbagKemahasiswaan" class="btn btn-custom btn-block text-light">E. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN SUBBAGIAN KEMAHASISWAAN FAKULTAS
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_LayananSubbagAkademik" class="btn btn-custom btn-block text-light">
                F. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN SUBBAGIAN AKADEMIK FAKULTAS
                </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/layanan_subbag_TURTP" class="btn btn-custom btn-block text-light">G. <br> SURVEY KEPUASAN PENGGUNA TERHADAP KINERJA LAYANAN SUBBAGIAN TURTP
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
            <a href="https://bit.ly/SurveiFMIPA_VMTS" class="btn btn-custom btn-block text-light">
                H. <br> SURVEI VMTS FAKULTAS
                </a>
        </div>
    </div>
    <br>
    <br>
<h5 class="text-center text-dark">2. DIISI OLEH DOSEN
</h5>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/SurveiFMIPA_Dosen" class="btn btn-custom btn-block text-light">SURVEY KEPUASAN DOSEN FMIPA
        </a>
    </div>
</div>
<br>
<br>

<h5 class="text-center text-dark">3.DIISI OLEH MAHASISWA  
</h5>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/SurveiFMIPA_Mahasiswa" class="btn btn-custom btn-block text-light">SURVEY KEPUASAN MAHASISWA TERHADAP PELAYANAN PENDIDIKAN</a>
    </div>
</div>
<br>
<br>
<h5 class="text-center text-dark">4.DIISI OLEH TENAGA KEPENDIDIKAN
</h5>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/SurveiFMIPA_TENDIK" class="btn btn-custom btn-block text-light">SURVEY KEPUASAN TENAGA KEPENDIDIKAN FMIPA
        </a>
    </div>
</div>
<br>
<br>
<h5 class="text-center text-dark">5. DIISI OLEH ALUMNI DAN PENGGUNA LULUSAN
</h5>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/TracerStudi_D3KesehatanFMIPAUNIB" class="btn btn-custom btn-block text-light">A. <br> Tracer Study prodi D3 Kesehatan: 
        </a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/TracerStudy_D3LSSarjanaPascaFMIPAUNIB" class="btn btn-custom btn-block text-light">B. <br> Tracer study prodi D3 lab sains, S1, dan S2: 
        </a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/SurveiFMIPA_PenggunaLulusan" class="btn btn-custom btn-block text-light">C. <br> SURVEY KEPUASAN MITRA PENGGUNA LULUSAN FMIPA
        </a>
    </div>
</div>
<br>
<br>
<h5 class="text-center text-dark">6. DIISI OLEH MITRA KERJASAMA
</h5>
<div class="row">
    <div class="col-lg-12">
        <!-- Tombol untuk mengarahkan ke form dengan lebar penuh -->
        <a href="https://bit.ly/SurveiFMIPA_MitraKerjasama" class="btn btn-custom btn-block text-light">SURVEY KEPUASAN MITRA KERJASAMA FMIPA
        </a>
    </div>
</div>
<br>

@endsection