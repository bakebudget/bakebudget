@extends('layout.layout')
@section('content')
    <div class="row">

        <div class="card">
            <h1>Metode Pembayaran</h1>
            <div class="row">
                <div class="col">
                    <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                        <input class="form-control py-2 border-right-0 border" type="search" placeholder="search"
                            id="example-search-input">
                        <span class="input-group-append">
                            <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i
                                    class="bi-search"></i></div>
                        </span>
                    </div>
                </div>
                <div class="col float-end text-end ml-5">
                    <a href="{{ url('metodepembayaran', ['tambah']) }}" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table  table-bordered DataTable">
                    <thead>
                        <tr>
                            <th scope="col">Kode Metode</th>
                            <th scope="col">Nama Metode</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metode_pembayaran as $m)
                            <tr>
                                <td>{{ $m->kode_metode }}</td>
                                <td>{{ $m->nama_metode }}</td>
                                <td>
                                    {{-- tombol hapus --}}
                                    <button data-id="{{ $m->kode_metode }}" class="btn hapusButton"
                                        data-id="{{ $m->kode_metode }}"><i class="bi-trash"></i></button>

                                    <a href="{{ url('/metodepembayaran', ['edit', $m->kode_metode]) }}"><i
                                            class="bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $metode_pembayaran->links() }}
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
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(({
                    isConfirmed
                }) => isConfirmed &&
                axios.get(`/metodepembayaran/hapus/${id}`)
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
