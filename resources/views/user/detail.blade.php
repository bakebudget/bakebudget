@extends('layout.layout')
@section('content')
<div class="row ">
    <div class="row">
        <div class="col">
            <a href="/user" class="btn btn-primary m-3"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Detail Akun
            </div>
            <div class="card-body">
               
                <div class="list-group">
                    <div class="list-group-item">
                        <h5 class="mb-1">Nama Akun</h5>
                        <p class="mb-1">{{ $username->username }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Level</h5>
                        <p class="mb-1">{{ $level->level }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Foto Profil Akun</h5>
                        {{-- <a href="{{ url("user?path=$user->foto", ["download"]) }}" class="btn btn-success">Download File</a> --}}
                        <img src="{{ Storage::url('public/' . $k->gambar_kue) }} }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection