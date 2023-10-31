@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col">
                <a href="/rencanapengeluaran" class="btn btn-primary m-3"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Detail Rencana Pengeluaran
                </div>
                <div class="card-body">
                   
                    <div class="list-group">
                        <div class="list-group-item">
                            <h5 class="mb-1">ID Pengeluaran</h5>
                            <p class="mb-1">{{ $pengeluaran->id_pengeluaran}}</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="mb-1">Jenis_pengeluaran</h5>
                            <p class="mb-1">{{ $pengeluaran->jenis_pengeluaran->nama_jenis_pengeluaran}}</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="mb-1">Deskripsi</h5>
                            <p class="mb-1">{{ $pengeluaran->deskripsi }}</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="mb-1">Nominal</h5>
                            <p class="mb-1">{{ $pengeluaran->nominal }}</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="mb-1">Status</h5>
                            <p class="mb-1">{{ $pengeluaran->status }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection