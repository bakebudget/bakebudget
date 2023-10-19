@extends('layout.layout')
@section('content')
<div class="row">
    <h3 class="judulformkue">Tambah Stok Kue</h1>
</div>
<div class="card">
    <div class="card-header">
        Form Tambah Stok
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="kode_kue" class="form-label">Kode Kue</label>
            <input type="text" class="form-control" id="kode_kue" placeholder="ex : K000">
        </div>
        <div class="mb-3">
            <label for="nama_kue" class="form-label">Nama Kue</label>
            <input type="text" class="form-control" id="nama_kue" placeholder="">
        </div>
        <div class="mb-3">
            <label for="stok_kue" class="form-label">Stok Kue</label>
            <input type="text" class="form-control" id="stok_kue" placeholder="">
        </div>
        <div class="mb-3">
            <label for="harga_kue" class="form-label">Harga Kue</label>
            <input type="text" class="form-control" id="harga_kue" placeholder="">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
    </div>
</div>
@endsection