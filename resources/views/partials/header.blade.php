<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .card-title {
    overflow-y: auto; /* Mengizinkan scrolling vertikal jika teks lebih panjang dari tinggi elemen */
    height: 72px; /* Tinggi tetap untuk judul */
    word-wrap: break-word; /* Memastikan kata-kata dapat dipisahkan untuk menghindari overflow horizontal */
}

/* Sembunyikan scrollbar untuk WebKit browsers seperti Chrome dan Safari */
.card-title::-webkit-scrollbar {
    display: none;
}

/* Opsi untuk Firefox */
.card-title {
    scrollbar-width: none; /* Firefox */
}

/* Untuk IE dan Edge */
.card-title {
    -ms-overflow-style: none; /* Internet Explorer 10+ */

}


    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPM FMIPA | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    @yield('css')

</head>