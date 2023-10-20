@extends('layout.layout')
@section('content')
<div class="row">
    <h1 class="judulkue">Data Akun</h1>
    <div class="card">
        <div class="cardkue">
            <div class="row">
                <div class="col">
                    <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                        <input class="form-control py-2 border-right-0 border" type="search" placeholder="search" id="example-search-input">
                        <span class="input-group-append">
                            <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i class="bi-search"></i></div>
                        </span>
                    </div>
                </div>
                <div class="col float-end text-end ml-5">
                    <a href="/user/tambah" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered kue">
                    <thead>
                        <tr>
                            <th scope="col">Nama Akun</th>
                            <th scope="col">Level</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gambar Akun</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                        <tr>
                            <th scope="row">{{ $u->username }}</th>
                            <td>{{ $u->level }}</td>
                            <td>{{ $u->password }}</td>
                            <td>{{ $u->foto }}</td>
                            <td>
                                <a href="{{ url('/user',['detail', $u->username]) }}"><i class="bi-eye"></i></a>
                                <button data-id="{{ $u->username }}" class="btn hapusButton"><i class="bi-trash"></i></button>
                                <a href="{{ url('/user', ['edit', $u->username]) }}"><i class="bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script type="module">
        $(document).on('click', '.hapusButton', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data anda tidak akan dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!!'
            }).then(({
                    isConfirmed
                }) => isConfirmed &&
                axios.get(`/user/hapus/${id}`)
                .then(() => Swal.fire({
                    icon: "success",
                    titleText: "Data berhasil dihapus",
                }))
                .catch(() => Swal.fire({
                    icon: "error",
                    titleText: "Data gagal dihapus",
                }))
                .finally(() => window.location.reload())
            )
        });
    </script>
@endsection
