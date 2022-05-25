@extends('layouts/users')

@section('title')
Home
@endsection

@section('content')
<div class="scrollTop" onclick="scrollToTop();">
  <span>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </span>
</div>

<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset ('img/carousel-img0.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Slide One Caption</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="{{ asset ('img/carousel-img1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Slide Two Caption</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="{{ asset ('img/carousel-img0.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Slide Three Caption</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="{{ asset ('img/carousel-img1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Slide Four Caption</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
      </div>
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

<div class="highlight">
  <div class="title">
    <h4>Special of The Day</h4>
  </div>
  <section class="slider">
    <ul id="lightSlider01" class="cs-hidden">
      @foreach ($highlights as $highlight)
      @if ($highlight->getAttribute('types_id')== '1')
      <li class="item-a">
        <div class="highlight-menu {{ $highlight->availabilities->slug }}">
          <div class="slide-img">
            <img src="{{asset ('storage/' . $highlight->gambar)}}" alt="{{ $highlight->nama }}">
            <div class="slide-overlay {{ $highlight->availabilities->slug }}">
              <a href="{{ $highlight->slug }}" class="links detail-btn">Detail Menu</a>
            </div>
          </div>
          <div class="slide-detail">
            <div class="slide-nama">
              <a href="{{ $highlight->slug }}" class="links">{{ $highlight->nama }}</a>
              <span><i>{{ $highlight->availabilities->tersedia }}</i></span>
              <a href="{{ $highlight->slug }}" class="links slide-harga">{{ $highlight->harga }}</a>
            </div>
          </div>
        </div>
      </li>
      @endif
      @endforeach
      {{-- <div class="backup">
        <li class="item-a">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="0">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-b">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg')}}" alt="1">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-c">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="2">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-d">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="3">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-e">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="4">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-f">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="5">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-g">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="6">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-h">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="7">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
        <li class="item-i">
          <div class="highlight-special">
            <div class="highlight-menu">
              <div class="slide-img">
                <img src="{{asset ('img/BeefTeriyakiwithRice.jpg') }}" alt="8">
                <div class="slide-overlay">
                  <a href="#" class="detail-btn">Detail Menu</a>
                </div>
              </div>
              <div class="slide-detail">
                <div class="slide-nama">
                  <a href="#" class="links">Triple Decker Sandwich</a>
                  <span>Special of The Day</span>
                </div>
                <a href="#" class="links slide-harga">Rp60,000</a>
              </div>
            </div>
          </div>
        </li>
      </div> --}}
    </ul>
  </section>
</div>

@foreach ($slides as $slide)
<div class="seasonal-highlight {{ $slide->display }}">
  <div class="title">
    <h4>{{ $slide->nama }}</h4>
  </div>
  <section class="seasonal-slider">
    <ul id="lightSlider02" class="cs-hidden">
      @foreach ($highlights as $highlight)
      @if ($highlight->types->getAttribute('id')== '2')
      <li class="item-b">
        <div class="highlight-menu {{ $highlight->availabilities->slug }}">
          <div class="slide-img">
            <img src="{{asset ('storage/' . $highlight->gambar)}}" alt="{{ $highlight->nama }}">
            <div class="slide-overlay {{ $highlight->availabilities->slug }}">
              <a href="{{ $highlight->slug }}" class="links detail-btn">Detail Menu</a>
            </div>
          </div>
          <div class="slide-detail">
            <div class="slide-nama">
              <a href="{{ $highlight->slug }}" class="links">{{ $highlight->nama }}</a>
              <span><i>{{ $highlight->availabilities->tersedia }}</i></span>
              <a href="{{ $highlight->slug }}" class="links slide-harga">{{ $highlight->harga }}</a>
            </div>
          </div>
        </div>
      </li>
      @endif
      @endforeach
    </ul>
  </section>
</div>
@endforeach

{{-- <div class="instagram-post">
  <div class="elfsight-app-237c180c-4d1e-4928-9a31-0888a8c5ada3"></div>
</div> --}}

{{-- <div class="other-highlight">
  <div class="title">
    <h4>Other Special Menu</h4>
  </div>
  <section class="other-slider">
    <ul id="lightSlider03" class="cs-hidden">
      @foreach ($highlights as $highlight)
      @if ($highlight->types->filters->getAttribute('id')== '3')
      @if ($highlight->getAttribute('types_id')!= '18')
      <li class="item-c">
        <div class="highlight-menu {{ $highlight->availabilities->slug }}">
          <div class="slide-img">
            <img src="{{asset ('storage/' . $highlight->gambar)}}" alt="{{ $highlight->nama }}">
            <div class="slide-overlay {{ $highlight->availabilities->slug }}">
              <a href="{{ $highlight->slug }}" class="links detail-btn">Detail Menu</a>
            </div>
          </div>
          <div class="slide-detail">
            <div class="slide-nama">
              <a href="{{ $highlight->slug }}" class="links">{{ $highlight->nama }}</a>
              <span><i>{{ $highlight->availabilities->tersedia }}</i></span>
              <a href="{{ $highlight->slug }}" class="links slide-harga">{{ $highlight->harga }}</a>
            </div>
          </div>
        </div>
      </li>
      @endif
      @endif
      @endforeach
    </ul>
  </section>
</div> --}}

<div class="wrapper">
  <div class="bg">
    <div class="title">
      <h4>Choose Your Menu</h4>
    </div>
    <div class="menu-btns">
      <div class="semua">
        <div class="batas">
          <button type="button" class="menu-btn active-btn khusus" id="Full-Menu"><span>Full Menu</span></button>
        </div>
        <div class="btengah">
          <div class="bbawah">
            <div class="dropdown">
              <button class="btn btng dropdown-toggle" type="button" id="makanan" data-bs-toggle="dropdown"
                aria-expanded="false">
                Special Menu
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($categories as $category)
                @if ($category->getAttribute('filters_id')== '3')
                <li><button type="button" class="menu-btn " id="{{ $category->slug }}">{{ $category->nama }}</button>
                </li>
                @endif
                @endforeach
              </ul>
            </div>

            <div class="dropdown">
              <button class="btn btng dropdown-toggle" type="button" id="makanan" data-bs-toggle="dropdown"
                aria-expanded="false">
                Food
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($categories as $category)
                @if ($category->getAttribute('filters_id')== '1')
                <li><button type="button" class="menu-btn " id="{{ $category->slug }}">{{ $category->nama }}</button>
                </li>
                @endif
                @endforeach
              </ul>
            </div>

            <div class="dropdown">
              <button class="btn btng dropdown-toggle" type="button" id="minuman" data-bs-toggle="dropdown"
                aria-expanded="false">
                Drink
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($categories as $category)
                @if ($category->getAttribute('filters_id')== '2')
                <li><button type="button" class="menu-btn " id="{{ $category->slug }}">{{ $category->nama }}</button>
                </li>
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
        <h3><span>&mdash;</span> {{ $heading->nama }} <span>&mdash;</span></h3>
      </div>
      <div class="jenis {{ $heading->slug }} heading back">
        <h3><span>&mdash;</span> {{ $heading->nama }} <span>&mdash;</span></h3>
      </div>
      @endforeach
    </div>
  </div>

  <div class="menu">
    <div
      class="single-menu @foreach ($headings as $heading) {{ $heading->filters->hide }} {{ $heading->slug }} @endforeach"
      style="background: none; border: none; box-shadow: none;">
    </div>
    <div
      class="single-menu @foreach ($headings as $heading) {{ $heading->filters->hide }} {{ $heading->slug }} @endforeach"
      style="background: none; border: none; box-shadow: none;">
    </div>
    @foreach ($menu as $menu)
    <a href="{{ $menu->slug }}"
      class="hyper single-menu {{ $menu->types->slug }} {{ $menu->types->filters->hide }} {{ $menu->availabilities->slug }}">
      <div>
        <div class="atas">
          <div class="img"><img src="{{asset ('storage/' . $menu->gambar)}}" alt=""></div>
          <div class="tengah">
            <h6>{{ $menu->nama }}</h6>
            <p class="harga"><span>{{ $menu->harga }}</span></p>
            @if ($menu->getAttribute('availabilities_id')== '1')
            <p class="tersedia ">{{ $menu->availabilities->nama }}</p>
            @else
            <p class="tidak-tersedia ">{{ $menu->availabilities->tersedia }}</p>
            @endif
          </div>
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>

{{-- <div id="demos" class="padding-90 text-center bg-off-white fix mt-5">
  <div class="container">
    <div class="row">
      <div class="section-title text-center col-xs-12 mb-2">
        <h1>Choose Your Menu</h1>
      </div>
      <div id="foodFilter" class="col-x-12 m-2 mb-5">
        <button class="button active" onclick="filterData('all')">All Menu</button>
        <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Makanan
          </button>
          <ul class="dropdown-menu">
            @foreach ($foods as $food)
            @if ($food->getAttribute('filters_id')== '1')
            <li><a class="dropdown-item" href="#">{{ $food->nama }}</a></li>
            @endif
            @endforeach
          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Minuman
          </button>
          <ul class="dropdown-menu">
            @foreach ($drinks as $drinks)
            @if ($drinks->getAttribute('filters_id')== '2')
            <li><a class="dropdown-item" href="#">{{ $drinks->nama }}</a></li>
            @endif
            @endforeach
          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Special Menu
          </button>
          <ul class="dropdown-menu">
            @foreach ($specials as $specials)
            @if ($specials->getAttribute('filters_id')== '3')
            <li><a class="dropdown-item" href="#">{{ $specials->nama }}</a></li>
            @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container text-center bg-off-white fix mt-5">
  <div class="food-menu">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach ($menu as $menu)
      <div class="col">
        <div class="card h-100" style="width: 15rem;">
          <img src="{{asset ('storage/' . $menu->gambar)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              {{ $menu->nama }}
            </h5>
            <h5 class="card-text"><span>
                {{ $menu->harga }}
              </span></h5>
            <p class="ready"><i>
                {{ $menu->availabilities->nama }}
              </i></p>

            <a href="{{ $menu->slug }}">
              <h5>Detail Menu</h5>
            </a>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div> --}}


@endsection