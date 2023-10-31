@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col">
        <a href="/rencanapengeluaran" class="btn btn-primary m-2"><i class="bi-arrow-left-circle me-2"></i>Kembali</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Tambah Data Rencana</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('rencanapengeluaran',['simpan']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col">
                    <label for="kodeMetode">Jenis Pengeluaran</label>
                    <select id="kodeMetode" class="form-control" name="kode_jenis_pengeluaran">
                      <option selected>Pilih Jenis Pengeluaran</option>
                      @foreach ($jenis_pengeluaran as $m)
                      <option value="{{ $m->kode_jenis_pengeluaran }}">{{ $m->nama_jenis_pengeluaran }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col mt-3">
                    <h6>Status</h6>
                    <div class="form-check">
                        <input class="form-check-input" value="LUNAS" type="radio" name="status" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="BELUM LUNAS" type="radio" name="status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Belum Lunas
                        </label>
                      </div>
                </div>
                <div class="form-group col mt-3">
                    <div class="input-group">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea class="form-control" aria-label="With textarea" name="deskripsi"></textarea>
                </div>
                <div class="form-group col mt-3">
                    <h6>Nominal</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp</span>
                        </div>
                        <input type="number" class="form-control" name="nominal" id="nominal" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                </div>
                </div>
                <div class="form-group col">
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</div>
@endsection