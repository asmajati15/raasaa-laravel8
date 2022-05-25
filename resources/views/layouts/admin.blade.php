<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="{{asset ('style/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    {{-- My CSS --}}
    {{--
    <link href="{{asset ('css/style.css')}}" rel="stylesheet"> --}}
    <link href="{{asset ('css/style_admin.css')}}" rel="stylesheet">

    {{-- Bootstrap JS --}}
    <script src="{{asset ('style/js/bootstrap.bundle.min.js')}}"></script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- My JS --}}
    <script src="{{asset ('/js/app.js')}}" defer></script>

    {{-- Trix Editor --}}
    <link href="{{asset ('css/trix.css')}}" rel="stylesheet">
    <script src="{{asset ('js/trix.js')}}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <title>Raasaa Admin - @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{url ('web-raasaa-admin')}}">
                <img src="{{asset ('img/admin_raasaa.png')}}" alt="" width="170" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('web-raasaa-admin') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('web-raasaa-admin')}}">
                            <i class="bi bi-house" style="font-size: 1rem;"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('web-raasaa-admin/menu*') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('web-raasaa-admin/menu')}}">
                            <i class="bi bi-clipboard-data" style="font-size: 1rem;"></i>
                            Semua Menu
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('web-raasaa-admin/type*') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('web-raasaa-admin/type')}}">
                            <i class="bi bi-tags" style="font-size: 1rem;"></i>
                            Kategori Menu
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('web-raasaa-admin/slide*') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('web-raasaa-admin/slide')}}">
                            <i class="bi bi-stars" style="font-size: 1rem;"></i>
                            Slider Menu
                        </a>
                    </li>
                    @can('administrator')
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link {{ Request::is('web-raasaa-admin/user*') ? 'active' : '' }}" aria-current="page"
                            href="{{url ('web-raasaa-admin/user')}}">
                            <i class="bi bi-person" style="font-size: 1rem;"></i>
                            List User
                        </a>
                    </li>
                    @endcan
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <form action="{{route ('logout.admin')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Log Out
                                <i class="bi bi-box-arrow-right" style="font-size: 1rem; color: white;"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer class="bg-white mt-5 border-top">
        <div class="container">
            <div class="row py-3">
                <div class="col text-center">
                    <p class="text-muted">&copy; AMNV x KARUNONIH</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>