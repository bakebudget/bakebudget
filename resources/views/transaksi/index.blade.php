@extends('layout.layout')
@section('content')
<div class="row">
    <h1 class="judulkue">Transaksi</h1>
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
                    <a href="/transaksi/add" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered kue">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Kode Metode</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($transaksi as $t)
                        <tr>
                            <th scope="row">{{ $t->id_transaksi }}</th>
                            <td>{{ $t->kode_metode }}</td>
                            <td>{{ $t->tanggal_transaksi }}</td>
                            <td>{{ $t->total }}</td>
                            <td>
                                <!-- tombol detail -->
                                <a href="{{ url('/transaksi',['detail', $t->id_transaksi]) }}"><i class="bi-eye"></i></a>
                                <!-- tombol hapus -->
                                <a href="{{ url('/transaksi',['hapus', $t->id_transaksi]) }}" onclick="confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi-trash"></i></a>
                                <!-- tombol edit -->
                                <a href="{{ url('/transaksi', ['edit', $t->id_transaksi]) }}"><i class="bi-pencil-square"></i></a>
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