@extends('layouts.master')
@section('title', 'Unduh')
@section('page', 'Unduh')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Daftar Unduhan</h2>
    @if (auth()->user()->role == 'admin')
    <a href="{{ route('unduhs.create') }}" class="btn btn-primary">Tambah Unduhan Baru</a>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Link</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unduhs as $unduh)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ $unduh->link }}" target="_blank">{{ $unduh->link }}</a></td>
                    <td>{{ $unduh->deskripsi }}</td>
                    
                    <td>
                        <a href="{{ route('unduhs.show', $unduh->id) }}" class="btn btn-info">Lihat</a>
                        @if (auth()->user()->role == 'admin')
                        <a href="{{ route('unduhs.edit', $unduh->id) }}" class="btn btn-warning">Edit</a>
                        <form id="deleteForm" action="{{ route('unduhs.destroy', $unduh->id) }}" method="POST" style="display: inline-block;">
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