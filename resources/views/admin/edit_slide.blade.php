@extends('layouts/admin')

@section('title')
  Edit Slider Highlight
@endsection

@section('content')
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Form Edit Slider Special Menu</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2 ps-4">
      <form action="/web-raasaa-admin/slide/{{ $slide->slug }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama Slider</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus
              value="{{ old('nama', $slide->nama) }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <input type="hidden" id="slug" name="slug" value="{{ old('slug', $slide->slug) }}">

        <div class="row mb-3">
          <label for="display" class="col-sm-2 col-form-label">Display</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select @error('display') is-invalid @enderror" id="display" name="display">
              <option value="" hidden>--Pilih Display--</option>
              <option value="highlight-display">Display</option>
              <option value="highlight-hidden">Hidden</option>
            </select>
            @error('display')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Slider</button>
        <a href="{{ url('web-raasaa-admin/slide') }}">
          <p class="d-inline mx-2">Kembali ke Slider Menu</p>
        </a>
      </form>
    </div>
  </div>


  <script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
      fetch('/web-raasaa-admin/slider/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection
