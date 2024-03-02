@extends('layouts.master')
@section('title', 'Formulir')
@section('page', 'Formulir')

@section('js')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-confirm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus saja!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h2 class="text-center">Daftar Formulir</h2>
            @if (auth()->user()->role == 'admin')
            <div class="text-center">
                <a href="{{ route('formulirs.create') }}" class="btn btn-primary">Tambah Formulir Baru</a>
            </div>
            @endif
        </div>

        @foreach ($formulirs as $formulir)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">{{ $formulir->deskripsi }}</h3>
                        <p class="card-text">Diisi oleh: {{ $formulir->diisi_oleh }}</p>
                        <a href="{{ $formulir->link }}" class="btn btn-info">Buka Form</a>
                        @if (auth()->user()->role == 'admin')
                            <a href="{{ route('formulirs.edit', $formulir->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('formulirs.destroy', $formulir->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-confirm">Hapus</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
