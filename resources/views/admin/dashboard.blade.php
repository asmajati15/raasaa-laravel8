@extends('layouts/admin')

@section('title')
  Dashboard
@endsection

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a class="links" href="{{ url('web-raasaa-admin/menu') }}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="mb-0 text-uppercase font-weight-bolder">Daftar Menu</h5>
                    <p class="mb-0">
                      Semua menu yang tersedia di restoran
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-bullet-list-67 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a class="links" href="{{ url('web-raasaa-admin/type') }}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="mb-0 text-uppercase font-weight-bolder">Kategori Menu</h5>
                    <p class="mb-0">
                      Kategori dari menu di restoran
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-tag text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        {{-- <a class="links" href="{{ url('web-raasaa-admin/slide') }}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="mb-0 text-uppercase font-weight-bolder">Slider Menu</h5>
                    <p class="mb-0">
                      Sorotan untuk menu spesial
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-button-play text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
        </a> --}}
        <a class="links" href="{{ url('web-raasaa-admin/user') }}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="mb-0 text-uppercase font-weight-bolder">Daftar Admin</h5>
                    <p class="mb-0">
                      Akun admin yang memiliki akses
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>   
      </div>
    </div>
    {{-- <div class="col-xl-3 col-sm-6">
      <a class="links" href="{{ url('web-raasaa-admin/user') }}">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <h5 class="mb-0 text-uppercase font-weight-bolder">Daftar Admin</h5>
                  <p class="mb-0">
                    Akun admin yang memiliki akses
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div> --}}
  </div>
  <div class="row">
    <div class="col pt-5">
      <h2>Welcome back, {{ auth()->user()->name }}</h2>
    </div>
  </div>
  </div>
@endsection
