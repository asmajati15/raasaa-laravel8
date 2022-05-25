<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap CSS --}}
    <link href="{{asset ('style/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    {{-- Online CSS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    {{-- My CSS --}}
    <link href="{{asset ('css/style.css')}}" rel="stylesheet">
    <link href="{{asset ('css/slider.css') }}" rel="stylesheet">
    <link href="{{asset ('css/lightslider.css') }}" rel="stylesheet">

    {{-- Bootstrap JS --}}
    <script src="{{asset ('style/js/bootstrap.bundle.min.js')}}"></script>
    {{-- Online JS --}}
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    {{-- My JS --}}
    <script src="{{asset ('/js/script.js')}}" defer></script>
    <script src="{{asset ('/js/jQuery.js') }}"></script>
    <script src="{{asset ('/js/lightslider.js') }}"></script>

    <title>Raasaa Resto - @yield('title')</title>
</head>

<body>
{{-- <body onload="loader()"> --}}
    {{-- <div id="loading">
        <span class="loader"></span>
        <div class="textLoader">
            <center>
                <b>Please Wait ... </b>
            </center>
        </div>
    </div> --}}

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{url ('/')}}">
                <img src="{{asset ('img/raasaa-logo1.png')}}" alt="" width="150" height="55">
            </a>
            <button id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('/')}}">
                            {{-- <img src="{{asset ('img/nav-logo0.svg')}}" alt="" width="25" height="25"> --}}
                            <i class="fas fa-utensils"> </i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('about')}}">
                            {{-- <img src="{{asset ('img/nav-logo1.svg')}}" alt="" width="25" height="25"> --}}
                            <i class="fas fa-info"> </i>
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page"
                            href="https://www.google.com/maps/place/Grand+Garden+Resto+%26+Cafe/@-6.5983597,106.801601,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c61cb3f6f7:0xa2dec90d60f85454!8m2!3d-6.5987602!4d106.8038251">
                            {{-- <img src="{{asset ('img/nav-logo2.svg')}}" alt="" width="25" height="25"> --}}
                            <i class="fas fa-location-dot"> </i>
                            Lokasi
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="https://www.kebunraya.id">
                            {{-- <img src="{{asset ('img/nav-logo3.svg')}}" alt="" width="25" height="25"> --}}
                            <i class="fas fa-arrow-up-right-from-square"> </i>
                            Kebun Raya
                        </a>
                    </li>
                </ul>
                {{-- <div class="ujunga" id="ujunga">
                    <li class="ujung" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="https://www.kebunraya.id">
                            <img src="{{asset ('img/nav-logo3.png')}}" alt="" width="20" height="20">
                            Kebun Raya
                        </a>
                    </li>
                </div> --}}
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="ikon"><i class="fas fa-moon" onclick="setDarkMode()" id="dark"
                                style="color: var(--bg2);"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <div class="footer">
        <footer class="align-item-center py-4">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm">
                        <h3><b>KONTAK KAMI</b></h3>
                        <p><i class="bi bi-geo-alt"> </i><b>Jl. Ir. H.Juanda No.13, Kota Bogor, Jawa Barat, 16122.</b></p>
                        <p><i class="bi bi-telephone"> </i>Phone : (+62)251-839-6790</p>
                        <p><i class="bi bi-whatsapp"> </i>Whatsapp : (+62)811-9711-5927</p>
                        <p><i class="bi bi-envelope"> </i>Email: info@kebunraya.id</p>
                    </div>
                    <div class="col-sm">
                        <img src="{{asset ('img/raasaa-logo1.png')}}" alt="" width="250" height="90">
                        <p><b>Follow us on: </b>
                            <a href="https://www.instagram.com"><i class="bi bi-instagram"></i>@raasaa_id</a>
                            {{-- <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.twitter.com"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.youtube.com"><i class="bi bi-youtube"></i></a> --}}
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3><b>Lokasi</b></h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15853.546971094951!2d106.8037897!3d-6.598765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2dec90d60f85454!2sGrand%20Garden%20Resto%20%26%20Cafe!5e0!3m2!1sid!2sid!4v1646111423343!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <p class="text-center"></p>
        </footer>
    </div>
</body>

</html>