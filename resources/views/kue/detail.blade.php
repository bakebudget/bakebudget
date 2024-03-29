@extends('layout.layout')
@section('content')
    <div class="row">
        <h3 class="judulformkue">Detail Kue</h1>
    </div>
    <div class="button-back">
        <a href="/kue"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            Detail Kue
        </div>
        <div class="card-body">
            <div class="list-group-item">
                <h5 class="mb-1">Kode Kue</h5>
                <p class="mb-1">{{ $kue->kode_kue }}</p>
            </div>
            <div class="list-group-item">
                <h5 class="mb-1">Nama Kue</h5>
                <p class="mb-1">{{ $kue->nama_kue }}</p>
            </div>
            <div class="list-group-item">
                <h5 class="mb-1">Stok Kue</h5>
                <p class="mb-1">{{ $kue->stok_kue }}</p>
            </div>
            <div class="list-group-item">
                <h5 class="mb-1">Harga Kue</h5>
                <p class="mb-1">{{ $kue->harga_kue }}</p>
            </div>
            <div class="list-group-item">
                <h5 class="mb-1">Gambar Kue</h5>
                {{ $kue->gambar_kue }}
                @if ($kue->gambar_kue)
                    <img src="{{ Storage::url('public/' . $kue->gambar_kue) }}" alt="">
                @else
                    <p class="mb-1">null</p>
                @endif
            </div>
        </div>
    </div>
@endsection
