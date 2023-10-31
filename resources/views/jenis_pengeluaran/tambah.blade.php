@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col">
        <a href="/jenis_pengeluaran" class="btn btn-primary m-2"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Tambah Jenis Pengeluaran</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('jenis_pengeluaran',['simpan']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col">
                    <label for="nama_jenis_pengeluaran">Nama Jenis Pengeluaran</label>
                    <input id="nama_jenis_pengeluaran" type="text" class="form-control" name="nama_jenis_pengeluaran">
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