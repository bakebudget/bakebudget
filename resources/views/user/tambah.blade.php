@extends('layout.layout')
@section('content')
<div class="row">
    <h3 class="judulformuser">Tambah Data Akun</h1>
</div>
<div class="card">
    <div class="card-header">
        Form Tambah Data Akun
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="username" class="form-label">Nama Akun</label>
            <input type="text" class="form-control" id="username" placeholder="">
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
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" placeholder="">
        </div>
        <div class="form-group col">
                    <label for="foto">Foto akun</label>
                    <input id="foto" type="file" class="form-control" name="foto">
                </div>
    </div>
</div>
@endsection