@extends('layouts.master')

@section('title', 'Beranda')
@section('page', 'Beranda')
@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Program Studi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usersCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Users -> Admin</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $adminCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Users -> User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="container-fluid"> <!-- Menggunakan container-fluid -->
    <div class="row text-center">
        <div class="col-12"> <!-- Mengganti class column untuk memenuhi lebar penuh -->
            <div class="card shadow mb-4" style="border: 5px solid rgb(124, 0, 0);">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <img src="{{ asset('images/struktur.jpg') }}" style="width: 100%; height: auto;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection