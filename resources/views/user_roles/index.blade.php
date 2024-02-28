@extends('layouts.master')
@section('title', 'Manajemen User')
@section('page', 'Manajemen User')

@section('js')
<script>
    document.querySelectorAll('.delete-confirm').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const form = this.closest('form');
        Swal.fire({
            title: "Anda yakin ingin hapus data?",
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit form secara programatik setelah konfirmasi
            }
        });
    });
});

</script>
@endsection

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Ubah Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <form action="{{ route('user_roles.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="role" required>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Ubah Role</button>
                    </form>
                </td>
                <td>
                    <form id="deleteForm" action="{{ route('user_roles.destroy', $user->id) }}" method="POST" style="display: inline-block;">
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
</div>
@endsection
