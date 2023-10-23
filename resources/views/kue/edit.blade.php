@extends('layout.layout')
@section('content')
    <div class="row">
        <h3 class="judulformkue">Edit Stok Kue</h1>
    </div>
    <div class="button-back">
        <button type="button" class="btn btn-primary">Back</button>
    </div>
    <div class="card">
        <div class="card-header">
            Form Edit Stok
        </div>
        <div class="card-body">
            <form class="editkue" action="{{ url('kue', ['update', $kue->kode_kue]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_kue" class="form-label">Nama Kue</label>
                    <input type="text" name="nama_kue" class="form-control" id="nama_kue" value="{{ $kue->nama_kue }}">
                </div>
                <div class="mb-3">
                    <label for="stok_kue" class="form-label">Stok Kue</label>
                    <input type="text" name="stok_kue" class="form-control" id="stok_kue" value="{{ $kue->stok_kue }}">
                </div>
                <div class="mb-3">
                    <label for="harga_kue" class="form-label">Harga Kue</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga_kue" class="form-control" id="harga_kue" aria-label="Amount"
                            value="{{ $kue->harga_kue }}">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" name="gambar_kue" type="file" id="formFile"
                        value="{{ $kue->gambar_kue }}">
                </div>
                <button type="submit" class="btn btn-success">Add Data</button>
            </form>
        </div>
    </div>
@endsection
