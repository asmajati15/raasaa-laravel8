@extends('layouts/admin')

@section('title')
  Kategori Menu
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
      <a href="/web-raasaa-admin/type/create" class="btn btn-success">Tambah Kategori</a>
    </div>
  </div>
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Menu Spesial</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($specials as $special)
              @if ($special->getAttribute('filters_id') == '3')
                <tr>
                  <td class="align-middle ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $special->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <span class="badge badge-sm bg-gradient-primary">{{ $special->filters->slug }}</span>
                  </td>
                  <td class="align-middle">
                    <a href="/web-raasaa-admin/type/{{ $special->slug }}/edit" class="btn btn-success">
                      <p class="text-xs font-weight-bold mb-0">Edit</p>
                    </a>
                  </td>
                </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Menu Reguler</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($types as $type)
              @if ($type->getAttribute('filters_id') != '3')
                <tr>
                  <td class="align-middle ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $type->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <span class="badge badge-sm bg-gradient-primary">{{ $type->filters->slug }}</span>
                  </td>
                  <td class="align-middle">
                    <a href="/web-raasaa-admin/type/{{ $type->slug }}/edit" class="btn btn-success">
                      <p class="text-xs font-weight-bold mb-0">Edit</p>
                    </a>
                    <form action="/web-raasaa-admin/type/{{ $type->slug }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                        <p class="text-xs font-weight-bold mb-0">Hapus</p>
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
  </div>
@endsection
