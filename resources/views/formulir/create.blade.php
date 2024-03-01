@extends('layouts.master')
@section('title', 'Unduh -> Tambah Unduhan')
@section('page', 'Unduh -> Tambah Unduhan')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Tambah Unduhan Baru</h2>
    <form action="{{ route('unduhs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('unduhs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection