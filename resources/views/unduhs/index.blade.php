@extends('layouts.master')
@section('title', 'Unduh')
@section('page', 'Unduh')

@section('js')
<script>
    document.querySelector('.delete-confirm').addEventListener('click', function(event) {
    event.preventDefault();

    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus saja!"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit(); // Submit form jika konfirmasi di-klik
        }
    });
});

</script>
@endsection

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Daftar Unduhan</h2>
    <a href="{{ route('unduhs.create') }}" class="btn btn-primary">Tambah Unduhan Baru</a>
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
                        <a href="{{ route('unduhs.edit', $unduh->id) }}" class="btn btn-warning">Edit</a>
                        <form id="deleteForm" action="{{ route('unduhs.destroy', $unduh->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger delete-confirm">Hapus</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection