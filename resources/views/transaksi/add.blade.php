@extends('layout.layout')
@section('content')
    <div class="row">
        <h3 class="judulformkue">Tambah Data Transaksi</h1>
    </div>
    <div class="button-back">
        <a href="/transaksi"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Transaksi
        </div>
        <div class="card-body">
            <form class="addkue" action="{{ url('kue', ['addsubmit']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="kode_metode">Metode Pembayaran</label>
                <select class="form-select" name="kode_metode" id="kode_metode" aria-label="Default select example">
                    <option selected>Metode Pembayaran</option>
                    @foreach ($metode as $m)
                    <option value="{{ $m->kode_metode }}">{{ $m->nama_metode }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total Harga Transaksi</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="total" class="form-control" id="total" aria-label="Amount">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Data</button>
            </form>
        </div>
    </div>
@endsection
