@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col">
        <a href="/pembayaran" class="btn btn-primary m-2"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Edit Data Pembayaran</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('pembayaran',['update', $pembayaran->id_pembayaran]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="oldfile" id="" value="{{ $pembayaran->bukti_pembayaran }}">
                <div class="form-group col">
                    <label for="kodeMetode">Metode Pembayaran</label>
                    <select id="kodeMetode" class="form-control" name="kode_metode">
                      <option selected>Pilih Metode</option>
                      @foreach ($metode as $m)
                      <option @if($pembayaran->kode_metode == $m->kode_metode) selected @endif value="{{ $m->kode_metode }}">{{ $m->nama_metode }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="idPengeluaran">Rencana Pengeluaran</label>
                    <select id="idPengeluaran" class="form-control" name="id_pengeluaran">
                      <option selected>Pilih Rencana Pengeluaran</option>
                      @foreach ($rencana as $r)
                      <option @if($pembayaran->id_pengeluaran == $r->id_pengeluaran) selected @endif value="{{ $r->id_pengeluaran }}">{{ $r->deskripsi }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal" type="date" class="form-control" value="{{ $pembayaran->tanggal_pembayaran }}" name="tanggal_pembayaran">
                </div>
                <div class="form-group col">
                    <label for="nama_penerima">Nama Penerima</label>
                    <input id="nama_penerima" type="text" class="form-control" value="{{ $pembayaran->nama_penerima }}" name="nama_penerima">
                </div>
                <div class="form-group col">
                    <label for="nomor_rekening_penerima">Nomor Rekening Penerima</label>
                    <input id="nomor_rekening_penerima" type="text" class="form-control" name="nomor_rekening_penerima" value="{{ $pembayaran->nomor_rekening_penerima }}">
                </div>
                <div class="form-group col">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <input id="bukti_pembayaran" type="file" class="form-control" name="bukti_pembayaran">
                </div>
                <div class="form-group col">
                    <label for="nominal">Nominal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" id="nominal" aria-label="Amount" name="nominal" value="{{ $pembayaran->nominal }}">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>
                <div class="form-group col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</div>
@endsection