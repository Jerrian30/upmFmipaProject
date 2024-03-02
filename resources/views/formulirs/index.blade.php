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

<div class="container mt-5">
    <h2 class="text-center">Daftar Formilir</h2>
    @if (auth()->user()->role == 'admin')
    <a href="{{ route('formulirs.create') }}" class="btn btn-primary">Tambah Formulir Baru</a>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Formulir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formulirs as $formulir)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $formulir->deskripsi }}</td>
                    
                    <td>
                        <a href="{{ $formulir->link }}" class="btn btn-info">Buka Form</a>
                        @if (auth()->user()->role == 'admin')
                        <a href="{{ route('formulirs.edit', $formulir->id) }}" class="btn btn-warning">Edit</a>
                        <form id="deleteForm" action="{{ route('formulirs.destroy', $formulir->id) }}" method="POST" style="display: inline-block;">
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