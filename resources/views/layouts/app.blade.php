<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }} ">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Karvz') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/rodfat-two-demo" rel="stylesheet">
                

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
                        <img src="images/karvz-logo.png" alt="">
                    </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <img src="images/menu.svg" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0 pink-color-text">
                    @guest

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('home') }}">Home</a></li>

                    @if (Route::has('login'))
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif

 

                    @else

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('home') }}">Home</a></li>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('blog') }}">All Posts</a></li>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('posts.index') }}">{{ __('My Posts') }}</a></li>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('posts.create') }}">{{ __('Add Post') }}</a></li>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 pink-color-text" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                        <span class="fw-bold">Karvz.</span> Todos os direitos reservados</div>
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