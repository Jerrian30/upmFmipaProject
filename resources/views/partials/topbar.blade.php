<nav class="navbar navbar-expand-lg navbar-light bg-primary topbar mb-4 fixed-top bg-body-tertiary custom-topbar">
    <!-- Logo or Image on the left side -->


    <!-- Sidebar Toggle (Topbar) for Mobile View -->
    <!-- Topbar Navbar -->
    <ul class="navbar-nav mr-auto">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('sbadmin/img/logoUNIB.png') }}" height="55" alt="logo">
        </a>

        <!-- Integrasi Item-Menu dari Sidebar ke Topbar -->
        <!-- Home -->


        <li class="nav-item active">
            <a class="nav-link" href="{{ route('beranda') }}" style="font-size: 14px;" >
                <i class="fas fa-home"></i>&nbsp;
                <span>Beranda</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dokumen.index') }}" style="font-size: 14px;">
                <i class="fas fa-file-alt"></i>&nbsp;
                <span>Dokumen SPMI</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-shield-alt"></i>&nbsp;
                <span>Gugus Penjaminan Mutu</span>
            </a>
        </li>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 14px;" id="laporanSurveiDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-file-alt fa-fw"></i>
                <span>Hasil Laporan<i class="fas fa-chevron-down"></i></span>
            </a>
            <!-- Dropdown - Laporan Survei -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="laporanSurveiDropdown">
                <a class="dropdown-item" href="{{ route('penggunaLulusan.eval') }}" style="font-size: 14px;">Pengguna Lulusan</a>
                <a class="dropdown-item" href="{{ route('dosen.eval') }}" style="font-size: 14px;">Dosen</a>
                <a class="dropdown-item" href="{{ route('mahasiswa.eval') }}" style="font-size: 14px;">Mahasiswa</a>
                <a class="dropdown-item" href="{{ route('kerjasama.eval') }}" style="font-size: 14px;">Mitra Kerja Sama</a>
                <a class="dropdown-item" href="{{ route('tracer.eval') }}" style="font-size: 14px;">Tracer Studi</a>
                <a class="dropdown-item" href="{{ route('pimpinan.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Pimpinan Fakultas</a>
                <a class="dropdown-item" href="{{ route('laypro.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Prodi</a>
                <a class="dropdown-item" href="{{ route('lab.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Laboratorium</a>
                <a class="dropdown-item" href="{{ route('kemahasiswaan.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan</a>
                <a class="dropdown-item" href="{{ route('keuangan.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Keuangan</a>
                <a class="dropdown-item" href="{{ route('turtp.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian TURTP</a>
                <a class="dropdown-item" href="{{ route('akademik.eval') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Akademik</a>
                <a class="dropdown-item" href="{{ route('visi.eval') }}" style="font-size: 14px;">VMTS</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('formulir.index') }}" style="font-size: 14px;">
                <i class="fas fa-poll"></i>
                &nbsp;
                <span>Formulir Survei</span>
            </a>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 14px;" id="laporanSurveiDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-file-alt fa-fw"></i>
                <span>Database Survei<i class="fas fa-chevron-down"></i></span>
            </a>
            <!-- Dropdown - Laporan Survei -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="laporanSurveiDropdown">
                <a class="dropdown-item" href="{{ route('penggunaLulusan.index') }}" style="font-size: 14px;">Pengguna Lulusan</a>
                <a class="dropdown-item" href="{{ route('dosen.index') }}" style="font-size: 14px;">Dosen</a>
                <a class="dropdown-item" href="{{ route('mahasiswa.index') }}" style="font-size: 14px;">Mahasiswa</a>
                <a class="dropdown-item" href="{{ route('kerjasama.index') }}" style="font-size: 14px;">Mitra Kerja Sama</a>
                <a class="dropdown-item" href="{{ route('tracer.index') }}" style="font-size: 14px;">Tracer Studi</a>
                <a class="dropdown-item" href="{{ route('pimpinan.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Pimpinan Fakultas</a>
                <a class="dropdown-item" href="{{ route('laypro.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Prodi</a>
                <a class="dropdown-item" href="{{ route('lab.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Laboratorium</a>
                <a class="dropdown-item" href="{{ route('kemahasiswaan.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan</a>
                <a class="dropdown-item" href="{{ route('keuangan.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Keuangan</a>
                <a class="dropdown-item" href="{{ route('turtp.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian TURTP</a>
                <a class="dropdown-item" href="{{ route('akademik.index') }}" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Akademik</a>
                <a class="dropdown-item" href="{{ route('visi.index') }}" style="font-size: 14px;">VMTS</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('unduhs.index') }}" style="font-size: 14px;">
                <i class="fas fa-download"></i>&nbsp;
                <span>Unduh</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-clipboard-list"></i>&nbsp;
                <span>SOP</span>
            </a>
        </li>
@if (auth()->user()->role == 'admin')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('user_roles.index') }}" style="font-size: 14px;">
                <i class="fas fa-users"></i>&nbsp;
                <span>Manajemen User</span>
            </a>
        </li>
@endif


    </ul>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow ml-auto">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                @php
                                    // Tentukan URL gambar profil atau gunakan gambar default
                    $profilePicture = Auth::user()->profile_picture ? asset('images/' . Auth::user()->profile_picture) : asset('images/profile.png');
                    @endphp
                    <img class="img-profile rounded img-thumbnail" width="430" src="{{ $profilePicture }}" alt="Profile Picture">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->
<!-- Modal Change Profile Picture -->

