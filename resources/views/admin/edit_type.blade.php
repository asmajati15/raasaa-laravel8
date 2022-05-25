@extends('layouts/admin')

@section('title')
Edit Kategori Menu
@endsection

@section('content')
<div class="container">
  <div class="row pb-4">
    <div class="col-lg-8">
      <h2 class="my-4">Form Edit Kategori Menu</h2>

      <form action="/web-raasaa-admin/type/{{ $type->slug }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Kategori Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus
              required value="{{ old('nama', $type->nama) }}">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>

        <input type="hidden" id="slug" name="slug" required value="{{ old('slug', $type->slug) }}">

        <div class="row mb-3">
          <label for="filters_id" class="col-sm-2 col-form-label">Jenis</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select @error('filters_id') is-invalid @enderror" id="filters_id" required
              name="filters_id">
              <option value="" hidden>--Pilih Jenis Menu--</option>
              @foreach ($filter as $filter)
              @if ($filter->getAttribute('id')!= '3')
              @if (old('filters_id', $type->filters_id) == $filter->id)
              <option value="{{ $filter->id }}" selected>{{ $filter->slug }}</option>
              @else
              <option value="{{ $filter->id }}">{{ $filter->slug }}</option>
              @endif
              @endif
              @endforeach
            </select>
            @error('filters_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Kategori Menu</button>
        <a href="{{url ('web-raasaa-admin/type')}}">
          <p class="d-inline mx-2">Kembali ke kategori</p>
        </a>
      </form>
    </div>
  </div>
</div>

<script>
  const nama = document.querySelector('#nama');
  const slug = document.querySelector('#slug');

  nama.addEventListener('change', function() {
    fetch('/web-raasaa-admin/type/checkSlug?nama=' + nama.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug) 
  });
</script>
@endsection