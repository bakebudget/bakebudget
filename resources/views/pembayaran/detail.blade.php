@extends('layout.layout')
@section('content')
<div class="row ">
    <div class="row">
        <div class="col">
            <a href="/pembayaran" class="btn btn-primary m-3"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Detail Pembayaran
            </div>
            <div class="card-body">
                {{-- <div class="row">
                    <div class="col">
                        <ul>
                            <li>Tanggal Pembayaran</li>
                            <li>Metode Pembayaran</li>
                            <li>Nama Penerima</li>
                            <li>Nomor Rekening Penerima</li>
                            <li>Nominal</li>
                            <li>Bukti Pembayaran</li>
                            <li>Perihal</li>
                        </ul>
                    </div>
                    <div class="col">
                        hi
                    </div>
                </div> --}}
                <div class="list-group">
                    <div class="list-group-item">
                        <h5 class="mb-1">ID Pembayaran</h5>
                        <p class="mb-1">{{ $pembayaran->id_pembayaran }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Tanggal Pembayaran</h5>
                        <p class="mb-1">{{ $pembayaran->tanggal_pembayaran }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Metode Pembayaran</h5>
                        <p class="mb-1">{{ $pembayaran->metode_pembayaran->nama_metode }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Perihal</h5>
                        <p class="mb-1">{{ $pembayaran->rencana_pengeluaran->deskripsi }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Nama Penerima</h5>
                        <p class="mb-1">{{ $pembayaran->nama_penerima }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Nomor Rekening Penerima</h5>
                        <p class="mb-1">{{ $pembayaran->nomor_rekening_penerima }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Nominal</h5>
                        <p class="mb-1">{{ $pembayaran->nominal }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Bukti Pembayaran</h5>
                        <a href="{{ url("pembayaran?path=$pembayaran->bukti_pembayaran", ["download"]) }}" class="btn btn-success">Download File</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection