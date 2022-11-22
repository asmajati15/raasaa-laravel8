<!--
=========================================================
* Argon Dashboard 2 - v2.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Raasaa Admin - @yield('title')</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('img/apple-icon.png')}}"> --}}
  {{-- <link rel="icon" type="image/png" href="{{asset ('img/favicon.png')}}"> --}}

  {{-- Trix Editor --}}
  <link href="{{ asset('css/trix.css') }}" rel="stylesheet">
  <script src="{{ asset('js/trix.js') }}"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
  
  <!-- Bootstrap 5  -->
  <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Fonts and icons  -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  {{-- Bootstrap Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
  <!-- Datatables -->
  <link href="{{ asset('datatables/datatables.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('datatables/DataTables-1.13.1/datatables.bootstrap5.min.css') }}" rel="stylesheet"/>

</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-default position-absolute w-100"></div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank">
        <img src="{{ asset('img/admin_raasaa.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Admin Raasaa</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('web-raasaa-admin') ? 'active' : '' }}"
            href="{{ url('web-raasaa-admin') }}">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('web-raasaa-admin/menu*') ? 'active' : '' }}"
            href="{{ url('web-raasaa-admin/menu') }}">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bullet-list-67 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Daftar Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('web-raasaa-admin/type*') ? 'active' : '' }}"
            href="{{ url('web-raasaa-admin/type') }}">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tag text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kategori Menu</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('web-raasaa-admin/slide*') ? 'active' : '' }}"
            href="{{ url('web-raasaa-admin/slide') }}">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-play text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Slider Menu</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('web-raasaa-admin/user*') ? 'active' : '' }}"
            href="{{ url('web-raasaa-admin/user') }}">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Daftar Admin</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                href="{{ url('web-raasaa-admin') }}">Admin</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('title')</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">@yield('title')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            {{-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <form action="{{ route('logout.admin') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">
                    Log Out
                    <i class="bi bi-box-arrow-right" style="font-size: 1rem; color: white;"></i>
                  </button>
                </form>
              </a>
            </li> --}}
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-user cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <i class="fa fa-user avatar avatar-sm  me-3 " style="color: black"></i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">{{ auth()->user()->name }}</span>
                        </h6>
                        <form action="{{ route('logout.admin') }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-danger">
                            Log Out
                            <i class="bi bi-box-arrow-right" style="font-size: 1rem; color: white;"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                AMNV x KARUNONIH
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- My JS -->
  <script src="{{ asset('/js/app.js') }}" defer></script>
  <!-- Bootstrap 5 -->
  <script src="{{ asset('/style/js/bootstrap.min.js') }}"></script>
  <!-- Datatables -->
  <script type="text/javascript" src="{{ asset('datatables/datatables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('datatables/DataTables-1.13.1/datatables.bootstrap5.min.js') }}"></script>
  <!--   Core JS Files   -->
  @yield('js')
  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js'"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/argon-dashboard.min.js?v=2.0.3') }}"></script>
</body>

</html>
