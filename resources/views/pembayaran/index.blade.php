@extends('layout.layout')
@section('content')
    <div class="row">
        
        <div class="card">
            <h1>Data Pembayaran</h1>
            <div class="row">
                <div class="col">
                    <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                        <input  class="form-control py-2 border-right-0 border" type="search" placeholder="search" id="example-search-input">
                        <span class="input-group-append">
                            <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i class="bi-search"></i></div>
                        </span>
                    </div>
                </div>
                <div class="col float-end text-end ml-5">
                    <a href="{{ url('pembayaran',['tambah']) }}" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table  table-bordered DataTable">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tanggal Pembayaran</th>
                          <th scope="col">Nama Penerima</th>
                          <th scope="col">Perihal</th>
                          <th scope="col">Nominal</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $x=1; ?>
                        @foreach ($pembayaran as $p)
                        <tr>
                          <th scope="row">{{ $x++ }}</th>
                          <td>{{ $p->tanggal_pembayaran }}</td>
                          <td>{{ $p->nama_penerima }}</td>
                          <td>{{ $p->rencana_pengeluaran->deskripsi }}</td>
                          <td>{{ $p->nominal }}</td>
                          <td>
                            <a href="{{ url('/pembayaran',['detail', $p->id_pembayaran]) }}"><i class="bi-eye"></i></a>
                            {{-- tombol hapus --}}
                            <a href="{{ url('/pembayaran',['hapus', $p->id_pembayaran]) }}" onclick="confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="bi-trash"></i></a>

                            <a href=""><i class="bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script type="module">
    $(document).on('click', '.hapusButton', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    Swal({
            title: "Are you sure!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        })        
            });

</script>
@endsection