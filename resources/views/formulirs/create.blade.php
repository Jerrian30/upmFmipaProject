@extends('layouts.master')
@section('title', 'Formulir -> Tambah Formulir')
@section('page', 'Formulir -> Tambah Formulir')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Tambah Formulir Baru</h2>
    <form action="{{ route('formulirs.store') }}" method="POST">
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
        <a href="{{ route('formulirs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection