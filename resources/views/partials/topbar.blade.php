<nav class="navbar navbar-expand-lg navbar-light bg-primary topbar mb-4 fixed-top bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <!-- Logo or Image on the left side -->
    <a class="navbar-brand" href="#">
        <img src="{{ asset('sbadmin/img/logoUNIB.png') }}" height="60" alt="logo">
    </a>
    <br>

    <!-- Sidebar Toggle (Topbar) for Mobile View -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars">hi</i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Integrasi Item-Menu dari Sidebar ke Topbar -->
        <!-- Home -->
        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;" >
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
        </li>

        <!-- Profil -->
        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-user"></i>
                <span>Profil</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-file-alt"></i>
                <span>Dokumen SPMI</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-shield-alt"></i>
                <span>Gugus Penjaminan Mutu</span>
            </a>
        </li>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 14px;" id="laporanSurveiDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-chart-line"></i>
                <span>Evaluasi<i class="fas fa-chevron-down"></i></span>
            </a>
            <!-- Dropdown - Laporan Survei -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="laporanSurveiDropdown">
                <a class="dropdown-item" href="{{ route('penggunaLulusan.eval') }}" style="font-size: 14px;">Pengguna Lulusan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Dosen</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Mahasiswa</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Mitra Kerja Sama</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Tracer Studi</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Pimpinan Fakultas</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Prodi</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Laboratorium</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Keuangan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian TURTP</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Akademik</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">VMTS</a>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-poll"></i>
                <span>Formulir Survei</span>
            </a>
        </li>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 14px;" id="laporanSurveiDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-file-alt fa-fw"></i>
                <span>Laporan Survei <i class="fas fa-chevron-down"></i></span>
            </a>
            <!-- Dropdown - Laporan Survei -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="laporanSurveiDropdown">
                <a class="dropdown-item" href="{{ route('penggunaLulusan.index') }}" style="font-size: 14px;">Pengguna Lulusan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Dosen</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Mahasiswa</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Mitra Kerja Sama</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Tracer Studi</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Pimpinan Fakultas</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Prodi</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Laboratorium</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Kemahasiswaan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Keuangan</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian TURTP</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">Pengguna Terhadap Kinerja Layanan Subbagian Akademik</a>
                <a class="dropdown-item" href="#" style="font-size: 14px;">VMTS</a>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-download"></i>
                <span>Unduh</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size: 14px;">
                <i class="fas fa-clipboard-list"></i>
                <span>SOP</span>
            </a>
        </li>

        <!-- ... Lanjutkan dengan item-menu lain sesuai kebutuhan ... -->

        <!-- Pengaturan Dropdown User yang sudah ada di Topbar -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Jerrian</span>
                <img class="img-profile rounded-circle" src="{{ asset('sbadmin/img/jerot.jpg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</div>
</div>
</nav>
<!-- End of Topbar -->
