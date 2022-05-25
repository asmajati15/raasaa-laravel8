@extends('layouts/admin')

@section('title')
List User
@endsection

@section('content')
<div class="container text-center bg-off-white fix mt-5 px-3">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('deleted'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('deleted') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="jenisMakanan">
        <div class="row my-3">
            <div class="col pb-3">
                <a href="/web-raasaa-admin/user/create" class="btn btn-primary">Tambah User</a>
            </div>
            <h3>List User</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <table class="table table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    @if ($user->getAttribute('id')!= '1')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {{-- <a href="/web-raasaa-admin/user/{{ $user->username }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                            </a> --}}
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