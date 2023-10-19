@extends('layout.layout')
@section('content')
<div class="row">
    <h1 class="judulkue">Stok Kue</h1>
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
                    <a href="/kue/add" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered kue">
                    <thead>
                        <tr>
                            <th scope="col">Kode Kue</th>
                            <th scope="col">Nama Kue</th>
                            <th scope="col">Stok Kue</th>
                            <th scope="col">Harga Kue</th>
                            <th scope="col">Gambar Kue</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kue as $k)
                        <tr>
                            <th scope="row">{{ $k->kode_kue }}</th>
                            <td>{{ $k->nama_kue }}</td>
                            <td>{{ $k->stok_kue }}</td>
                            <td>{{ $k->harga_kue }}</td>
                            <td>
                                @if($k)
                                <img src="data:{{ $k->jpg}};base64,{{ base64_encode($k->gambar_kue) }}>" alt="">
                                @else
                                <p>Image not found</p>
                                @endif
                                <!-- gak tau dari ourfriend  -->
                                <!-- {{ $k->gambar_kue }} -->
                            </td>
                            <td>
                                <a href="{{ url('/kue',['detail', $k->kode_kue]) }}"><i class="bi-eye"></i></a>
                                <a href=""><i class="bi-trash"></i></a>
                                <a href=""><i class="bi-pencil-square"></i></a>
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