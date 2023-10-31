@php use Illuminate\Support\Facades\Auth; @endphp
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BakeBudget</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

  <script src="sweetalert2.all.min.js"></script>

  <!-- custom css -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <link rel="icon" href="{{asset('bakebudget.ico')}}">

  {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <link href="sidebars.css" rel="stylesheet"> --}}

  <style>
    .c {
      background-color: rgb(255, 211, 203);
      border-radius: 10px;
    }
  </style>



</head>

<body>

  {{-- navbar --}}
  {{-- <nav class="navbar navbar-expand bg-warning bg-body-tertiary bg-warning">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">BakeBudget</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav> --}}
  {{-- navbar end --}}
  {{-- <aside> --}}
  <header>
    <aside style="height:calc(100vh); position: fixed;" class="">
      <div class="position-sticky sidebar d-flex flex-column flex-shrink-0 p-3 " style="width: 280px; position: relative;">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="{{ asset('assets/images/bakebudget.png') }}" alt="" class="me-2" width="200">
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a href="/" class="nav-link " aria-current="page">
              <i class="bi-house-door" height="16"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{ url('kue') }}" class="nav-link ">
              <i class="bi-shop" height="16"></i>
              Kue
            </a>
          </li>
          <li>
            <a href="#" class="nav-link ">
              <i class="bi-tags" height="16"></i>
              Transaksi
            </a>
          </li>
          <li>
            <a href="#" class="nav-link ">
              <i class="bi-journals" height="16"></i>
              Rencana Pengeluaran
            </a>
          </li>
          <li>
            <a href="{{ url('pembayaran') }}" class="nav-link ">
              <i class="bi-handbag" height="16"></i>
              Pembayaran
            </a>
          </li>
          <li>
            <a href="{{ url('user') }}" class="nav-link ">
              <i class="bi-person-circle" height="16"></i>
              Akun
            </a>
          </li>
          <li>
            <a href="{{ url('log') }}" class="nav-link ">
              <i class="bi-journal-text" height="16"></i>
              Log Activity
            </a>
          </li>
        </ul>
        <hr>
        <ul class="list-unstyled ps-0">

          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              Account
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">New...</a></li>
                <li><a href="#" class="link-dark rounded">Profile</a></li>
                <li><a href="#" class="link-dark rounded">Settings</a></li>
                <li><a href="{{ url('logout') }}" class="link-dark rounded">Log out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

    </aside>
  </header>

  <main>
    <div class="container pt-4">
      {{-- @include('layout.flashMessage') --}}
      @yield('content')
    </div>
  </main>
  {{-- </aside> --}}
  {{-- sidebar end --}}

  {{-- <main style="margin-top: 90px;"> --}}

  {{-- </main> --}}
    
@yield('footer');

  @include('sweetalert::alert')
  <script type="module">

  </script>
    <script>
      (function () {
        'use strict'
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
          new bootstrap.Tooltip(tooltipTriggerEl)
        })
      })()
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>