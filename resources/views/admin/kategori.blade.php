@extends('layouts/admin')

@section('title')
Kategori Menu
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
    <div class="row my-3">
        <div class="col pb-3">
            <a href="/web-raasaa-admin/type/create" class="btn btn-primary">Tambah Kategori</a>
        </div>
    </div>
    <div class="jenisMakanan pt-3 pb-5 border-top">
        <div class="row my-3">
            <h3>Menu Spesial</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <table class="table table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori Menu</th>
                        <th scope="col">Jenis Menu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specials as $special)
                    @if ($special->getAttribute('filters_id')== '3')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $special->nama }}</td>
                        <td>{{ $special->filters->slug }}</td>
                        <td>
                            <a href="/web-raasaa-admin/type/{{ $special->slug }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                            </a>
                            {{-- <form action="/admin/type/{{ $special->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                    <span class="bi bi-trash-fill" style="font-size: 1rem;"></span>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="jenisMakanan py-3 border-top">
        <div class="row my-3">
            <h3>Menu Reguler</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <table class="table table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori Menu</th>
                        <th scope="col">Jenis Menu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                    @if ($type->getAttribute('filters_id')!= '3')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $type->nama }}</td>
                        <td>{{ $type->filters->slug }}</td>
                        <td>
                            <a href="/web-raasaa-admin/type/{{ $type->slug }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                            </a>
                            <form action="/web-raasaa-admin/type/{{ $type->slug }}" method="POST" class="d-inline">
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