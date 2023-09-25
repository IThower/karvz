<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgb(237,74,191)">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }} ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('', 'Karvz') }}</title>

    <!-- Fontes-->

    <link rel="stylesheet" href={{ asset('css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome.min.css') }}>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg" id="mainNav">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="">
                        <img src={{ asset('images/karvz-logo.png') }} alt="" alt="Karvz-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <img src={{ asset('images/menu.svg') }} alt="">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto py-4 py-lg-0 pink-color-text">
                            @guest

                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('home') }}">Home</a></li>

                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                            href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                            href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                            @else
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('home') }}">Home</a></li>

                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('blog') }}">All Posts</a></li>

                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('posts.index') }}">{{ __('My Posts') }}</a></li>

                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('posts.create') }}">{{ __('Add Post') }}</a></li>

                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    @yield('content')

    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="text-center text-secondary mt-5 mb-4 lead">&copy; 2023
                        <span class="fw-bold">Karvz.</span> Todos os direitos reservados
                    </div>
                    <ul class="list-inline text-center light-gray mb-5" style="margin-bottom: 0;">
                        <li class="list-inline-item"></i>
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fa-brands fa-x-twitter" style="color: #909097"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse" style="color: #909097"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fa-brands fa-instagram" style="color: #909097"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>

    @yield('scripts')
</body>

</html>
