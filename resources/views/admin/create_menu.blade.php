@extends('layouts/admin')

@section('title')
  Tambah Menu
@endsection

@section('content')
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Form Tambah Menu</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2 ps-4">
      <form action="/web-raasaa-admin/menu" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus
              value="{{ old('nama') }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">

        <div class="row mb-3">
          <label for="harga" class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
              data-type="currency" placeholder="Rp" value="{{ old('harga') }}">
            @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="availabilities_id" class="col-sm-2 col-form-label">Ketersediaan</label>
          <div class="col-sm-10">
            <select id="stock" class="form-select @error('availabilities_id') is-invalid @enderror" id="availabilities_id"
              name="availabilities_id">
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
        {{-- <div class="1 hides">
          <div class="row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok Menu</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok') }}">
            </div>
          </div>
        </div> --}}
        <div class="row mb-3">
          <label for="types_id" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select @error('types_id') is-invalid @enderror" id="types_id" name="types_id">
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
        <div class="row mb-3">
          <label for="hari" class="col-sm-2 col-form-label">Hari Tersedia</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="hari" name="hari" value="{{ old('hari') }}">
            <div class="feedback">
              <i>*khusus special menu</i>
            </div>
          </div>
        </div>
        {{-- <div class="row mb-3">
          <label for="waktu" class="col-sm-2 col-form-label">Waktu/Jam Tersedia</label>
          <div class="col">
            <label for="mulai" class="form-label">Mulai</label>
            <input type="time" class="form-control" id="mulai" name="mulai" value="{{ old('mulai') }}">
            <div class="feedback">
              <i>*khusus special menu</i>
            </div>
          </div>
          <div class="col">
            <label for="sampai" class="form-label">Sampai</label>
            <input type="time" class="form-control" id="sampai" name="sampai" value="{{ old('sampai') }}">
          </div>
        </div> --}}
        <div class="row mb-3">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
            <trix-editor input="deskripsi"></trix-editor>
            @error('deskripsi')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="gambar" class="col-sm-2">Gambar</label>
          <div class="col-sm-2">
            <img class="img-preview img-thumbnail">
          </div>
          <div class="col-sm-8">
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar"
              onchange="previewImage()">
            @error('gambar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
        <a href="{{ url('web-raasaa-admin/menu') }}">
          <p class="d-inline mx-2">Kembali ke daftar menu</p>
        </a>
      </form>
    </div>
  </div>

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
