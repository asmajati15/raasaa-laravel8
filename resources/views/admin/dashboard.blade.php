@extends('layouts/admin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container text-center bg-off-white my-5">
    <div class="row">
        <div class="col pb-3">
            <h2>Welcome back, {{ auth()->user()->name }}</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
        <div class="col">
            <div class="card h-100 mx-auto" style="width: 20rem;">
                <a class="links" href="{{url ('web-raasaa-admin/type')}}">
                    <img src="{{asset ('img/admin_ico1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><b>Edit Kategori</b></h5>
                        <p class="card-text">Bagian untuk mengedit kategori menu.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 mx-auto" style="width: 20rem;">
                <a class="links" href="{{url ('web-raasaa-admin/menu')}}">
                    <img src="{{asset ('img/admin_ico0.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><b>Edit Menu</b></h5>
                        <p class="card-text">Bagian untuk mengedit daftar menu.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection