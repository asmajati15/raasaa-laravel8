@extends('layouts/admin')

@section('title')
  Daftar Admin
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
      <a href="/web-raasaa-admin/user/create" class="btn btn-primary">Tambah Admin</a>
    </div>
  </div>
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Daftar Admin</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              @if (auth()->user()->id  != $user->id)
                <tr>
                  {{-- <td class="align-middle ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                  </td> --}}
                  <td class="align-middle ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $user->name }}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $user->username }}</p>
                  </td>
                  <td class="align-middle">
                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                  </td>
                  <td class="align-middle">
                    <form action="/web-raasaa-admin/user/{{ $user->username }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                          <span class="bi bi-trash-fill" style="font-size: 1rem;"></span>
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
