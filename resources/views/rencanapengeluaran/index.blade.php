@extends('layout.layout')
@section('content')
<div class="row">

    <div class="card">
        <h1>Data Rencana Pengeluaran</h1>
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
                <a href="{{ url('rencanapengeluaran', ['tambah']) }}" class="btn btn-success">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table  table-bordered DataTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis Pengeluaran</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">nominal</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    @foreach ($pengeluaran as $p)
                        <tr>
                            <th scope="row">{{ $x++ }}</th>
                            <td>{{ $p->jenis_pengeluaran->nama_jenis_pengeluaran }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>{{ $p->nominal }}</td>
                            <td>
                                @if($p->status == 'LUNAS') 
                                <span class="badge rounded-pill bg-success">{{ $p->status }}</span>
                                @else
                                <span class="badge rounded-pill bg-danger">{{ $p->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/rencanapengeluaran', ['detail', $p->id_pengeluaran]) }}"><i
                                        class="bi-eye"></i></a>
                                {{-- tombol hapus --}}
                                <button data-id="{{ $p->id_pengeluaran }}" class="btn hapusButton"
                                    data-id="{{ $p->id_pengeluaran }}"><i class="bi-trash"></i></button>

                                <a href="{{ url('/rencanapengeluaran', ['edit', $p->id_pengeluaran]) }}"><i
                                        class="bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $pengeluaran->links() }}
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
            axios.get(`/rencanapengeluaran/hapus/${id}`)
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