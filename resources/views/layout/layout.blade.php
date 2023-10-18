<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>anu</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

  <!-- Custom CSS -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">


  {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

  {{-- <link href="sidebars.css" rel="stylesheet"> --}}

  <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media (min-width: 991.98px) {
            .main {
                padding-left: 240px;
            }
        }
        main {
                padding-left: 300px;
                padding-right: 25px;
            }

      .active {
        background-color: #FD7E14
      }

      body {
      min-height: 100vh;
      min-height: -webkit-fill-available;
      }

      html {
        height: -webkit-fill-available;
      }

      .sidebar {
        border-radius: 0px 30px 30px 0px;
        background-color: #CFE2FF;
      }

      aside {
        /* position: relative; */
        display: flex;
        flex-wrap: nowrap;
        height: 100vh;
        height: -webkit-fill-available;
        max-height: 100vh;
        overflow-x: hidden;
        overflow-y: auto;
        
      }

      .b-example-divider {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .bi {
        vertical-align: -.125em;
        pointer-events: none;
        fill: currentColor;
      }

      .dropdown-toggle { outline: 0; }

      .nav-flush .nav-link {
        border-radius: 0;
      }

      .nav-link {
        color: #052C65;
      }

      .nav-link:hover {
        background-color: #d2f4ea;
      }

      .nav-link:focus {
        background-color: #FD7E14;
        color:white;
      }

      .btn-toggle {
        display: inline-flex;
        align-items: center;
        padding: .25rem .5rem;
        font-weight: 600;
        color: rgba(0, 0, 0, .65);
        background-color: transparent;
        border: 0;
      }
      .btn-toggle:hover,
      .btn-toggle:focus {
        color: rgba(0, 0, 0, .85);
        background-color: #d2f4ea;
      }

      .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;
        transform-origin: .5em 50%;
      }

      .btn-toggle[aria-expanded="true"] {
        color: rgba(0, 0, 0, .85);
      }
      .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
      }

      .btn-toggle-nav a {
        display: inline-flex;
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
        text-decoration: none;
      }
      .btn-toggle-nav a:hover,
      .btn-toggle-nav a:focus {
        background-color: #d2f4ea;
      }

      .scrollarea {
        overflow-y: auto;
      }

      .fw-semibold { font-weight: 600; }
      .lh-tight { line-height: 1.25; }

    </style> -->
  <!-- pindahin css ke file sendiri di public\css  -->



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
            <a href="/dashboard" class="nav-link " aria-current="page">
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
            <a href="#" class="nav-link ">
              <i class="bi-person-circle" height="16"></i>
              Akun
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




  <script>
    (function() {
      'use strict'
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      tooltipTriggerList.forEach(function(tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
      })
    })()
  </script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>