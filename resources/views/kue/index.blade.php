@extends('layout.layout')
@section('content')
<div class="row">
    <div class="list-group list-group-horizontal">
        <div class="list-item flex-fill">
            <h3>Kue</h3>
        </div>
    </div>
    <table class="table table-bordered">
        <h4>Stok Kue</h4>
        <thead>
            <tr>
                <th scope="col">Kode Kue</th>
                <th scope="col">Nama Kue</th>
                <th scope="col">Harga Kue</th>
                <th scope="col">Stok Kue</th>
                <th scope="col">Gambar Kue</th>
            </tr>
        </thead>
        <tbody>
            <?php $x = 1;  ?>
            @foreach ($kue as $k)
            <tr>
                <th scope="row">{{ $x++ }}</th>
                <td>{{ $k->nama_kue }}</td>
                <td>{{ $k->harga_kue }}</td>
                <td>{{ $k->stok_kue }}</td>
                <td>{{ $k->gambar_kue }}</td>
            </tr>
            <td>
                <a href="{{ url('/kue',['detail', $k->kode_kue]) }}"><i class="bi-eye"></i></a>
                <a href=""><i class="bi-trash"></i></a>
                <a href=""><i class="bi-pencil-square"></i></a>
            </td>
            @endforeach
        </tbody>
    </table>
    @endsection