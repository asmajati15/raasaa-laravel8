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
      <button type="button" class="btn bg-gradient-primary btn-block mb-3" data-bs-toggle="modal"
        data-bs-target="#ModalTambah">
        Tambah Menu
      </button>
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
        <table id="datatable" class="table align-items-center mb-0">
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

  {{-- Modal Tambah --}}
  <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="ModalTambahTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="/web-raasaa-admin/menu" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Menu</label>
            <div class="col">
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                autofocus value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">

          <div class="form-group">
            <label for="harga" class="col-form-label">Harga</label>
            <div class="col">
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                name="harga" data-type="currency" placeholder="Rp" value="{{ old('harga') }}">
              @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="availabilities_id" class="col-form-label">Ketersediaan</label>
            <div class="col">
              <select id="stock" class="form-select @error('availabilities_id') is-invalid @enderror"
                id="availabilities_id" name="availabilities_id">
                <option value="" hidden>--Pilih Ketersediaan--</option>
                @foreach ($availability as $availability)
                  @if (old('availabilities_id') == $availability->id)
                    <option value="{{ $availability->id }}" selected>{{ $availability->nama }}</option>
                  @else
                    <option value="{{ $availability->id }}">{{ $availability->nama }}</option>
                  @endif
                @endforeach
              </select>
              @error('availabilities_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="types_id" class="col-form-label">Kategori</label>
            <div class="col">
              <select id="Select" class="form-select @error('types_id') is-invalid @enderror" id="types_id"
                name="types_id">
                <option value="" hidden>--Pilih Kategori Menu--</option>
                @foreach ($type as $type)
                  @if (old('types_id') == $type->id)
                    <option value="{{ $type->id }}" selected>{{ $type->nama }}</option>
                  @else
                    <option value="{{ $type->id }}">{{ $type->nama }}</option>
                  @endif
                @endforeach
              </select>
              @error('types_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <div class="col">
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                value="{{ old('deskripsi') }}">
              @error('deskripsi')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="gambar" class="col-form-label">Gambar</label>
            <div class="row">
              <div class="col-sm-2">
                <img class="img-preview img-thumbnail">
              </div>
              <div class="col-sm-10">
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                  name="gambar" onchange="previewImage()">
                @error('gambar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary">Tambah Menu</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>
@endsection

@section('js')
  <script>
    // Membuat slug
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
      fetch('/web-raasaa-admin/menu/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection
