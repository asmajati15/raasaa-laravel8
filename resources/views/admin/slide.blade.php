@extends('layouts/admin')

@section('title')
  Slider Menu
@endsection

@section('content')
  <div class="container text-center bg-off-white fix mt-5 px-3">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="jenisMakanan">
      <div class="row my-3">
        {{-- <div class="col pb-3">
                <a href="/admin/type/create" class="btn btn-primary">Tambah Kategori</a>
            </div> --}}
      </div>
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Slider Menu</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Slider</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($slide as $slide)
                    <tr>
                      <td class="align-middle ps-4">
                        <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $slide->nama }}</p>
                      </td>
                      @if ($slide->getAttribute('display') == 'highlight-display')
                        <td class="align-middle">
                          <span class="badge badge-sm bg-gradient-primary">Display</span>
                        </td>
                      @else
                        <td class="align-middle">
                          <span class="badge badge-sm bg-gradient-primary">Hidden</span>
                        </td>
                      @endif
                      <td class="align-middle">
                        <a href="/web-raasaa-admin/slide/{{ $slide->slug }}/edit" class="btn btn-success">
                          <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                        </a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection
