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
                        <p class="mb-1">{{ $user->username }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Level</h5>
                        <p class="mb-1">{{ $user->level }}</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">Foto Profil Akun</h5>
                        @if($user->foto)
                                <img src="{{ Storage::url('public/' . $user->foto) }}" class="img" alt="" height="100" width="100">
                                @else
                                <p>Image not found</p>
                                @endif</td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection