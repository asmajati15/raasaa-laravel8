@extends('layouts/admin')

@section('title')
  Full Menu
@endsection

@section('content')
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session()->has('deleted'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('deleted') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="row my-3">
    <div class="col pb-3">
      <a href="/web-raasaa-admin/menu/create" class="btn btn-primary">Tambah Menu</a>
    </div>
  </div>

  {{-- <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Menu Spesial</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ketersediaan</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($special as $special)
              @if ($special->types->getAttribute('filters_id') == '3')
                <tr>
                  <td class="align-middle ps-4">
                    <img src="{{ asset('storage/' . $special->gambar) }}" class="avatar avatar-lg" alt="...">
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $special->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <span class="badge badge-sm bg-gradient-primary">{{ $special->types->nama }}</span>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $special->harga }}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $special->availabilities->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <a href="menu/{{ $special->slug }}" class="btn btn-info">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="/web-raasaa-admin/menu/{{ $special->slug }}/edit" class="btn btn-success">
                      <i class="bi bi-pencil-fill" style="font-size: 1rem; color:white"></i>
                    </a>
                    <form action="/web-raasaa-admin/menu/{{ $special->slug }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                        <span class="bi bi-trash-fill" style="font-size: 1rem; color:white"></span>
                      </button>
                    </form>
                  </td>
                </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}

  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Menu Reguler</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ketersediaan</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($menu as $menu)
              {{-- @if ($menu->types->getAttribute('filters_id') != '3') --}}
                <tr>
                  <td class="align-middle ps-4">
                    <img src="{{ asset('storage/' . $menu->gambar) }}" class="avatar avatar-lg" alt="...">
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $menu->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <span class="badge badge-sm bg-gradient-primary">{{ $menu->types->nama }}</span>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $menu->harga }}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $menu->availabilities->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <a href="menu/{{ $menu->slug }}" class="btn btn-info">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="/web-raasaa-admin/menu/{{ $menu->slug }}/edit" class="btn btn-success">
                      <i class="bi bi-pencil-fill" style="font-size: 1rem; color:white"></i>
                    </a>
                    <form action="/web-raasaa-admin/menu/{{ $menu->slug }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                        <span class="bi bi-trash-fill" style="font-size: 1rem; color:white"></span>
                      </button>
                    </form>
                  </td>
                </tr>
              {{-- @endif --}}
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
@endsection
