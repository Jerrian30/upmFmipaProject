@extends('layouts.master')
@section('title', 'formlir')
@section('page', 'formlir')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Daftar Formulir</h2>
    @if (auth()->user()->role == 'admin')
    <a href="{{ route('formlirs.create') }}" class="btn btn-primary">Tambah Formulir Baru</a>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Dokumen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formlirs as $formlir)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $formlir->deskripsi }}</td>
                    
                    <td>
                        <a href="{{ $formlir->link }}" class="btn btn-info">Lihat</a>
                        @if (auth()->user()->role == 'admin')
                        <a href="{{ route('formlirs.edit', $formlir->id) }}" class="btn btn-warning">Edit</a>
                        <form id="deleteForm" action="{{ route('formlirs.destroy', $formlir->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger delete-confirm">Hapus</button>
                        </form>
                        @endif
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection