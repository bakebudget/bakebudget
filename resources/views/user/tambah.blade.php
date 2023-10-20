@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col">
        <a href="/user" class="btn btn-primary m-2"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Tambah Data Akun</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('user',['simpan']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col">
                    <label for="username">Nama Akun</label>
                    <input id="username" type="text" class="form-control" name="username">
                </div>
                <div class="form-group col">
                    <label for="level">Level</label>
                    <select id="level" class="form-control" name="level">
                      <option selected>Pilih Level</option>
                      <option value="admin">Admin</option>
                      <option value="owner">Owner</option>
                      <option value="stok">Stok</option>
                      <option value="kasir">Kasir</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="password">Password</label>
                    <input id="password" type="text" class="form-control" name="password">
                </div>
                <div class="form-group col">
                    <label for="foto">Foto Akun</label>
                    <input id="foto" type="file" class="form-control" name="foto">
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