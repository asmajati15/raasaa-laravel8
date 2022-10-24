@extends('layouts/users')

@section('title')
  Home
@endsection

@section('content')
  <div class="scrollTop" id="scroll" onclick="scrollToTop();">
    <span>
      <ion-icon name="arrow-up-outline"></ion-icon>
    </span>
  </div>

  <div class="wrapper" id="wrapper">
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{ asset('img/carousel-img0.jpg') }}" class="d-block w-100" alt="...">
          <!-- <div class="carousel-caption d-md-block">
            <h5>Slide One Caption</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
          </div> -->
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="{{ asset('img/carousel-img1.jpg') }}" class="d-block w-100" alt="...">
          <!-- <div class="carousel-caption d-md-block">
            <h5>Slide Two Caption</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
          </div> -->
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="{{ asset('img/carousel-img0.jpg') }}" class="d-block w-100" alt="...">
          <!-- <div class="carousel-caption d-md-block">
            <h5>Slide Three Caption</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
          </div> -->
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="{{ asset('img/carousel-img1.jpg') }}" class="d-block w-100" alt="...">
          <!-- <div class="carousel-caption d-md-block">
            <h5>Slide Four Caption</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
          </div> -->
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="higbg2">
      <div class="highlight">
        <div class="wrapper-titla">
          <div class="wrapper-title">
            <div class="title">
              <h4>Special Menu</h4>
            </div>
          </div>
        </div>
        <div class="slider-wrapper">
          <section class="slider ">
            <ul id="autoWidth" class="cS-hidden">
              @foreach ($highlights as $highlight)
                @if ($highlight->getAttribute('types_id') == '1')
                  <li class="item-a bgab">
                    <div class="bga ">
                      <a class="hyper {{ $highlight->availabilities->slug }}" href="{{ $highlight->slug }}">
                        <div class="box {{ $highlight->availabilities->slug }}">
                          <div class="slide-img">
                            <img src="{{ asset('storage/' . $highlight->gambar) }}" alt="{{ $highlight->nama }}">
                          </div>
                          <div class="detail-box">
                            <div class="type">
                              <span>{{ $highlight->nama }}</span>
                              <div class="highlight-price">
                                {{-- <p class="new">{{ $highlight->types->nama }}</p> --}}
                                <p class="price">{{ $highlight->harga }}</p>
                                @if ($highlight->getAttribute('availabilities_id') == '1')
                                  <p class="stock-ready">{{ $highlight->availabilities->tersedia }}</p>
                                @else
                                  <p class="stock-not">{{ $highlight->availabilities->tersedia }}</p>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                @endif
              @endforeach
            </ul>
          </section>
          <div class="select">
          </div>
        </div>
      </div>
    </div>

    @foreach ($slides as $slide)
      <div class="higbg {{ $slide->display }}">
        <div class="highlight">
          <div class="wrapper-titla">
            <div class="wrapper-title">
              <div class="title">
                <h4>{{ $slide->nama }}</h4>
              </div>
            </div>
          </div>
          <div class="slider-wrapper">
            <section class="slider ">
              <ul id="autoWidth2" class="cS-hidden">
                @foreach ($highlights as $highlight)
                  @if ($highlight->getAttribute('types_id') == '2')
                    <li class="item-a bgab">
                      <div class="bga ">
                        <a class="hyper {{ $highlight->availabilities->slug }}" href="{{ $highlight->slug }}">
                          <div class="box {{ $highlight->availabilities->slug }}">
                            <div class="slide-img">
                              <img src="{{ asset('storage/' . $highlight->gambar) }}" alt="{{ $highlight->nama }}">
                            </div>
                            <div class="detail-box">
                              <div class="type">
                                <span>{{ $highlight->nama }}</span>
                                <div class="highlight-price">
                                  {{-- <p class="new">{{ $highlight->types->nama }}</p> --}}
                                  <p class="price">{{ $highlight->harga }}</p>
                                  @if ($highlight->getAttribute('availabilities_id') == '1')
                                    <p class="stock-ready">{{ $highlight->availabilities->tersedia }}</p>
                                  @else
                                    <p class="stock-not">{{ $highlight->availabilities->tersedia }}</p>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                  @endif
                @endforeach
              </ul>
            </section>
            <div class="select">
            </div>
          </div>
        </div>
      </div>
    @endforeach

    <div class="bg">
      <div class="title">
        <h4>Choose Your Menu</h4>
      </div>
      <div class="menu-btns">
        <div class="semua">
          <div class="batas">
            <button type="button" class="menu-btn active-btn khusus font" id="Full-Menu"><span>Full Menu</span></button>
            {{-- <div class="dropdown full">
              <button class="btn btng dropdown-toggle font" type="button" id="makanan" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Special Menu</span>
              </button>
              <ul class="dropdown-menu max" id="max3">
                @foreach ($categories as $category)
                  @if ($category->getAttribute('filters_id') == '3')
                    <li><button type="button" class="menu-btn "
                        id="{{ $category->slug }}">{{ $category->nama }}</button></li>
                  @endif
                @endforeach
              </ul>
            </div> --}}
          </div>
          <div class="btengah">
            <div class="bbawah">
              <div class="dropdown full">
                <button class="btn btng dropdown-toggle font" type="button" id="makanan" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Food
                </button>
                <ul class="dropdown-menu max" id="max1">
                  @foreach ($categories as $category)
                    @if ($category->getAttribute('filters_id') == '1')
                      <li><button type="button" class="menu-btn "
                          id="{{ $category->slug }}">{{ $category->nama }}</button></li>
                    @endif
                  @endforeach
                </ul>
              </div>

              <div class="dropdown full">
                <button class="btn btng dropdown-toggle " type="button" id="minuman" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Drink
                </button>
                <ul class="dropdown-menu max" aria-labelledby="dropdownMenuButton1" id="max2">
                  @foreach ($categories as $category)
                    @if ($category->getAttribute('filters_id') == '2')
                      <li><button type="button" class="menu-btn "
                          id="{{ $category->slug }}">{{ $category->nama }}</button></li>
                    @endif
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bungkus">
      <div class="judul">
        <div class="jenis Full-Menu heading front">
          <h3><span>&mdash;</span> Full Menu <span>&mdash;</span></h3>
        </div>
        <div class="jenis Full-Menu heading back">
          <h3><span>&mdash;</span> Full Menu <span>&mdash;</span></h3>
        </div>
        @foreach ($headings as $heading)
          <div class="jenis {{ $heading->slug }} heading front">
            <h3><span></span> {{ $heading->nama }} <span></span></h3>
          </div>
          <div class="jenis {{ $heading->slug }} heading back">
            <h3><span></span> {{ $heading->nama }} <span></span></h3>
          </div>
        @endforeach
      </div>
    </div>

    <div class="menu">
      {{-- <div class="single-menu  Special-of-the-Day special-of-the-day  Special-of-the-Day susnset-di-kebun  Full-Menu indonesian-taste  Full-Menu snacks  Full-Menu from-the-grill  Full-Menu vegetables  Full-Menu desset  Full-Menu beverages-coffee  Full-Menu signature-coffee  Full-Menu tea  Full-Menu chocolate-milk-and-shakes  Full-Menu water  Full-Menu juices  Full-Menu mocktail " style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: medium none; box-shadow: none; display: block;">
      </div> --}}
      {{-- <div class="single-menu @foreach ($headings as $heading) {{ $heading->filters->hide }} {{ $heading->slug }} @endforeach" style="background: none; border: none; box-shadow: none;">
      </div>
      <div
        class="single-menu @foreach ($headings as $heading) {{ $heading->filters->hide }} {{ $heading->slug }} @endforeach"
        style="background: none; border: none; box-shadow: none;">
      </div> --}}
      @foreach ($menu as $menu)
      @if ($menu->types->getAttribute('filters_id') != '3')
      <div class="single-menu {{ $menu->types->slug }} {{ $menu->types->filters->hide }} {{ $menu->availabilities->slug }}">
        <a href="{{ $menu->slug }}" class="hyper">
            <div class="atas">
              <div class="img"><img src="{{ asset('storage/' . $menu->gambar) }}" alt="" ></div>
              <div class="tengah">
                <h6>{{ $menu->nama }}</h6>
                <p class="harga"><span>{{ $menu->harga }}</span></p>
                @if ($menu->getAttribute('availabilities_id') == '1')
                  <p class="tersedia ">{{ $menu->availabilities->nama }}</p>
                @else
                  <p class="tidak-tersedia ">{{ $menu->availabilities->tersedia }}</p>
                @endif
              </div>
            </div>
          </a>
        </div>
      @endif
      @endforeach
    </div>
  </div>
@endsection
