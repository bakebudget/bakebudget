@extends('layout.layout')
@section('content')
<div class="row">
    <div class="list-group list-group-horizontal">
        <div class="list-item flex-fill">
            <h3>Dashboard</h3>
        </div>
        <div class="list-item flex-fill">
            <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
                <span class="input-group-append">
                    <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i class="bi-search"></i></div>
                </span>
            </div>
        </div>
        <div class="list-item flex-fill">
            <p>Hello, {{Auth::user()->username}}</p>
        </div>
    </div>
</div>
<div class="row mt-3">
  <a class="col c c-1 m-4 p-3" style="  text-decoration: none;" href="{{ url('pembayaran') }}" class="">
      <h6 style="color: rgb(132, 76, 76);">Total Pengeluaran</h6>  
  </a>

  <a class="col c c-1 m-4 p-3" style="  text-decoration: none;" href="{{ url('user') }}" class="">
    <h6 style="color: rgb(132, 76, 76);">Total User</h6>
    <h4 style="color: rgb(0, 0, 0);">{{ $user }}</h4>    
  </a>
  <div class="col c c-3 m-4"></div>
  <div class="col c c-4 m-4"></div>
</div>
<div class="row mt-3">
    <h2>Data Transaksi Terbaru</h2>
    <div class="col">
        <div class="card d-flex justify-content-center mt-3">
            <table style="border-radius: 50px;" class="table table-bordered m-2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection