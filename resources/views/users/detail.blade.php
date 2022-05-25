@extends('layouts/users')

@section('title')
Detail
@endsection

@section('content')
<div class="detail-menu">
    <div class="container py-5">
        <div class="animated animatedFadeInUp fadeInUp">
            <a href="{{url ('/')}}" class="back-menu"><i class="bi bi-chevron-left"></i> MENU</a>
            <div class="row align-items-center justify-content-md-center">
                <div class="col-sm-auto">
                    <div class="gambar-menu">
                        <img src="{{asset ('storage/' . $menu->gambar)}}" class="mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="deskripsi-menu">
                        @if ( $menu->getAttribute('availabilities_id')== '2')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Saat ini menu sedang <b>tidak tersedia</b>, silahkan <a href="{{url ('/')}}">pilih menu</a>
                            lain
                        </div>
                        @endif
                        <div class="heading">
                            <h2 class="card-title">{{ $menu->nama }}</h2>
                            <p class="card-text"><i>{{ $menu->types->nama }} | {{ $menu->availabilities->tersedia }}</i></p>
                            <h4 class="card-text" style="border-bottom: 1px solid  var(--bg20);">Detail</h4>
                            @if ( $menu->types->getAttribute('filters_id')== '3')
                            <p class="card-text"><i>{{ $menu->hari }}</i></p>
                            @endif
                            <p class="card-text">{!! $menu->deskripsi !!}</p>
                            <h4 class="card-text harga pb-3"></span>{{ $menu->harga }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection