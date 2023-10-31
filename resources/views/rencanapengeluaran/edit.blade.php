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
                <h3>Edit Data Rencana Pengeluaran</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('rencanapengeluaran',['update', $pengeluaran->id_pengeluaran]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col">
                    <label for="kodeMetode">Jenis Pengeluaran</label>
                    <select id="kodeMetode" class="form-control" name="kode_jenis_pengeluaran">
                      <option selected>Pilih Jenis Pengeluaran</option>
                      @foreach ($jenis_pengeluaran as $m)
                      <option @if($pengeluaran->kode_jenis_pengeluaran == $m->kode_jenis_pengeluaran) selected @endif value="{{ $m->kode_jenis_pengeluaran }}">{{ $m->nama_jenis_pengeluaran }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col mt-3">
                    <h6>Status</h6>
                    <div class="form-check">
                        <input class="form-check-input" value="LUNAS" type="radio" name="status" id="lunas" @if ($pengeluaran->status == 'LUNAS')
                        checked
                        @endif>
                        <label class="form-check-label badge rounded-pill bg-success" for="lunas">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="BELUM LUNAS" type="radio" name="status" id="belumlunas" @if ($pengeluaran->status == 'BELUM LUNAS')
                        checked
                        @endif>
                        <label class="form-check-label badge rounded-pill bg-danger" for="belumlunas">
                          Belum Lunas
                        </label>
                      </div>
                </div>
                <div class="form-group col mt-3">
                    <div class="input-group">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea class="form-control" aria-label="With textarea" name="deskripsi">{{ $pengeluaran->deskripsi }}</textarea>
                </div>
                <div class="form-group col mt-3">
                    <h6>Nominal</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp</span>
                        </div>
                        <input type="number" value="{{ $pengeluaran->nominal }}" class="form-control" name="nominal" id="nominal" aria-label="Amount (to the nearest dollar)">
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