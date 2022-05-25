@extends('layouts/admin')

@section('title')
Full Menu
@endsection

@section('content')
<div class="container text-center bg-off-white fix mt-5">
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
    <div class="row mt-3">
        <div class="col">
            <a href="/web-raasaa-admin/menu/create" class="btn btn-primary">Tambah Menu</a>
        </div>
        <div class="row mt-3">
            <div class="col">
            </div>
        </div>
    </div>

    <div class="food-menu py-3 border-top">
        <h2>Menu Spesial</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($special as $special)
            @if ($special->types->getAttribute('filters_id') == '3')
            <div class="col">
                <div class="card h-100 mx-auto" style="width: 15rem;">
                    <a class="links" href="menu/{{ $special->slug }}">
                        <img src="{{asset ('storage/' . $special->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $special->nama }}
                            </h5>
                            <h5 class="card-text">
                                <span>{{ $special->harga }}</span>
                            </h5>
                            <p class="ready">
                                <i>{{ $special->availabilities->nama }}</i>
                            </p>
                            <a href="/web-raasaa-admin/menu/{{ $special->slug }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem; color:white"></i>
                                Edit
                            </a>
                            <form action="/web-raasaa-admin/menu/{{ $special->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                    <span class="bi bi-trash-fill" style="font-size: 1rem; color:white"></span>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <div class="food-menu pt-3 border-top">
        <h2>Menu Reguler</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($menu as $menu)
            @if ($menu->types->getAttribute('filters_id') != '3')
            <div class="col">
                <div class="card h-100 mx-auto" style="width: 15rem;">
                    <a class="links" href="menu/{{ $menu->slug }}">
                        <img src="{{asset ('storage/' . $menu->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $menu->nama }}
                            </h5>
                            <h5 class="card-text">
                                <span>{{ $menu->harga }}</span>
                            </h5>
                            <p class="ready">
                                <i>{{ $menu->availabilities->nama }}</i>
                            </p>
                            <a href="/web-raasaa-admin/menu/{{ $menu->slug }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem; color:white"></i>
                                Edit
                            </a>
                            <form action="/web-raasaa-admin/menu/{{ $menu->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                    <i class="bi bi-trash-fill" style="font-size: 1rem; color:white"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection