@extends('layouts/users')

@section('title')
    Cart
@endsection

@section('content')
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-8">
                <h2 class="my-4">Form Pemesanan</h2>

                <form action="/web-raasaa-admin/menu" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-4 mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                autofocus value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label for="meja" class="col-sm-2 col-form-label">Nomor Meja</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('meja') is-invalid @enderror" id="meja" name="meja" value="{{ old('meja') }}">
                            @error('meja')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">

                    <div class="card my-3">
                        <div class="card-header">Menu</div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="availabilities_id" class="col-sm-2 col-form-label">Menu</label>
                                    <div class="col-sm-6">
                                        <select id="stock" class="form-select @error('availabilities_id') is-invalid @enderror"
                                            id="availabilities_id" name="availabilities_id">
                                            <option value="" hidden>--Pilih Menu--</option>
                                        </select>
                                        @error('availabilities_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control @error('meja') is-invalid @enderror" id="meja" name="meja" value="{{ old('meja') }}">
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary" sty>Tambah Menu</button>
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                    <a href="{{ url('web-raasaa-admin/menu') }}">
                        <p class="d-inline mx-2">Kembali ke daftar menu</p>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
