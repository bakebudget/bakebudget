@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col">
        <a href="/pembayaran" class="btn btn-primary m-3"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Pembayaran</h3>
            </div>
            <div class="card-body">
                <div class="form-group col">
                    <label for="kodeMetode">Metode Pembayaran</label>
                    <select id="kodeMetode" class="form-control">
                      <option selected>Pilih Metode</option>
                      @foreach ($metode as $m)
                      <option value="{{ $m->kode_metode }}">{{ $m->nama_metode }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="idPengeluaran">Rencana Pengeluaran</label>
                    <select id="idPengeluaran" class="form-control">
                      <option selected>Pilih Rencana Pengeluaran</option>
                      @foreach ($rencana as $r)
                      <option value="{{ $r->id_pengeluaran }}">{{ $r->deskripsi }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal" type="date" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="nama_penerima">Nama Penerima</label>
                    <input id="nama_penerima" type="text" class="form-control">
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection