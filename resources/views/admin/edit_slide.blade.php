@extends('layouts/admin')

@section('title')
Edit Slider Highlight
@endsection

@section('content')
<div class="container">
  <div class="row pb-4">
    <div class="col-lg-8">
      <h2 class="my-4">Slider Highlight</h2>

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
        {{-- <div class="row mb-3">
          <label for="types_id" class="col-sm-2 col-form-label">Nama Slider</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select @error('types_id') is-invalid @enderror" id="types_id"
              name="types_id">
              <option value="" hidden>--Pilih Kategori Menu--</option>
              @foreach ($type as $type)
              @if ($type->filters->getAttribute('id')== '3')
              @if (old('types_id', $slide->types_id) == $type->id)
              <option value="{{ $type->id }}" selected>{{ $type->nama }}</option>
              @else
              <option value="{{ $type->id }}">{{ $type->nama }}</option>
              @endif
              @endif
              @endforeach
            </select>
            @error('types_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div> --}}

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
        <a href="{{url ('web-raasaa-admin/slide')}}">
          <p class="d-inline mx-2">Kembali ke Slider Menu</p>
        </a>
      </form>
    </div>
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