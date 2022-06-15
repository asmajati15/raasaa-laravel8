@extends('layouts/admin')

@section('title')
  Pendaftaran User
@endsection

@section('content')
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Form Pendaftaran Admin</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2 ps-4">
      <form action="/web-raasaa-admin/user" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus
              required value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username"
              required value="{{ old('username') }}">
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required
              value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
              name="password" required value="{{ old('password') }}">
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- <div class="row mb-3">
          <label for="is_administrator" class="col-sm-2 col-form-label">Level</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select @error('is_administrator') is-invalid @enderror" id="is_administrator" required name="is_administrator">
              <option value="" hidden>--Pilih Tingkatan--</option>
              <option value="1">Administrator</option>
              <option value="0">Admin Reguler</option>
            </select>
            @error('is_administrator')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        </div> --}}
        <button type="submit" class="btn btn-primary">Daftar</button>
        <a href="{{ url('web-raasaa-admin/user') }}">
          <p class="d-inline mx-2">Kembali ke list user</p>
        </a>
      </form>
    </div>
  </div>
@endsection
