@extends('layouts/admin')

@section('title')
Detail
@endsection

@section('content')
<div class="container pt-5" id="detail">
    <a href="{{url ('/web-raasaa-admin/menu')}}" class="back-menu"><i class="bi bi-chevron-left"></i> MENU</a>
    <div class="row align-items-center">
        <div class="col">
            <div class="gambar-menu">
                <img src="{{asset ('storage/' . $menu->gambar)}}" class="mx-auto d-block" alt="">
            </div>
        </div>
        <div class="col">
            <a href="/web-raasaa-admin/menu/{{ $menu->slug }}/edit" class="btn btn-success">
                <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                Edit
            </a>
            <form action="/web-raasaa-admin/menu/{{ $menu->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                    <span class="bi bi-trash-fill" style="font-size: 1rem;"></span>
                    Hapus
                </button>
            </form>
            <div class="deskripsi-menu">
                <div class="heading">
                    <h3 class="card-title">{{ $menu->nama }}</h3>
                    <p class="card-text"><i>{{ $menu->availabilities->nama }} | {{ $menu->types->nama }}</i></p>
                    <h4 class="card-text border-bottom">Detail</h4>
                    @if ( $menu->types->getAttribute('filters_id')== '3')
                    <p class="card-text"><i>{{ $menu->hari }}</i></p>
                    @endif
                    <p class="card-text">{!! $menu->deskripsi !!}</p>
                    <h4 class="card-text pb-3"></span>{{ $menu->harga }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection