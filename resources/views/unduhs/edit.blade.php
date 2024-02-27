@extends('layouts.master')
@section('title', 'Unduh -> Edit Unduhan')
@section('page', 'Unduh -> Edit Unduhan')

@section('content')

<div class="container mt-5">
    <h2>Edit Unduhan</h2>
    <form action="{{ route('unduhs.update', $unduh->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $unduh->link) }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $unduh->deskripsi) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('unduhs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection