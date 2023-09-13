@extends('layouts.app')

@section('content')
    <!-- Section Hero ---------------------------------------------------------------------------- -->
    <section class="hero my-5">
        <!-- Botão Carousel Carousel ---------------------------------------------------------------------------- -->
        <div id="carouselExampleIndicators1" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner" style="height: 700px;">
                <div class="container">
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6 fs-4" style="margin-top: 100px;">
                                <span class="badge rounded-pill pink-color obsidian-shard-text mt-5 mb-2 text-uppercase">Top
                                    Trending</span>
                                <h1 class="text-light fw-bold">Como aumentar suas vendas.</h1>
                                <p class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et,
                                    illo
                                    eos. Delectus nostrum placeat
                                    omnis reiciendis quo perspiciatis dolores, officia autem. Quisquam in repellendus culpa
                                    laboriosam asperiores dolorum? Qui, magnam!</p>
                                <a class="btn pink-color px-4 obsidian-shard-text fw-bold text-uppercase" href="#"
                                    role="button">Quero Vender Mais</a>
                            </div>
                            <div class="col-md-6" style="margin-top: 120px;">
                                <img src="/images/currency-monochromatic-12-x.svg" alt=""
                                    class="d-block w-100 mx-auto" style="height: 400px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6 fs-4" style="margin-top: 100px;">
                                <span
                                    class="badge rounded-pill pink-color obsidian-shard-text mt-5 mb-2 text-uppercase">Projects</span>
                                <h1 class="text-light fw-bold">Veja Nossos Projetos.</h1>
                                <p class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et,
                                    illo
                                    eos. Delectus nostrum placeat
                                    omnis reiciendis quo perspiciatis dolores, officia autem. Quisquam in repellendus culpa
                                    laboriosam asperiores dolorum? Qui, magnam!</p>
                                <a class="btn pink-color px-4 obsidian-shard-text fw-bold text-uppercase" href="#"
                                    role="button">Encontrar Projetos</a>
                            </div>
                            <div class="col-md-6" style="margin-top: 120px;">
                                <img src="/images/currency-monochromatic-12-x.svg" alt=""
                                    class="d-block w-100 mx-auto" style="height: 400px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6 fs-4" style="margin-top: 100px;">
                                <span
                                    class="badge rounded-pill pink-color obsidian-shard-text mt-5 mb-2 text-uppercase">Blogs</span>
                                <h1 class="text-light fw-bold">Criando seu E-Commerce.</h1>
                                <p class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et,
                                    illo
                                    eos. Delectus nostrum placeat
                                    omnis reiciendis quo perspiciatis dolores, officia autem. Quisquam in repellendus culpa
                                    laboriosam asperiores dolorum? Qui, magnam!</p>
                                <a class="btn pink-color px-4 obsidian-shard-text fw-bold text-uppercase" href="#"
                                    role="button">Quero um e-commerce</a>
                            </div>
                            <div class="col-md-6" style="margin-top: 120px;">
                                <img src="/images/currency-monochromatic-12-x.svg" alt=""
                                    class="d-block w-100 mx-auto" style="height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Botão Controles Carousel ---------------------------------------------------------------------------- -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>

    </section>

    <!-- Section Serviços ---------------------------------------------------------------------------- -->

    <section class="servicos py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h3 class="pink-color-text fs-5" style="text-transform: uppercase">Nós te ajudamos com</h3>
                <h2 class="text-light fw-bold fs-1" style="text-transform: uppercase">Os nossos serviços</h2>
            </div>

            <div class="row g-2 text-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/card-1.svg" alt="" class="img-fluid">
                            <h5 class="card-title text-light p-1">Design de Website &
                                Desenvolvimento</h5>
                            <a href="#" class="btn pink-color">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/card-2.svg" alt="" class="img-fluid">
                            <h5 class="card-title text-light p-1">Otimização de
                                Mecanismos de Busca</h5>
                            <a href="#" class="btn pink-color">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/card-3.svg" alt="" class="img-fluid">
                            <h5 class="card-title text-light p-1">Marketing de
                                Redes Sociais</h5>
                            <a href="#" class="btn pink-color">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/card-4.svg" alt="" class="img-fluid">
                            <h5 class="card-title text-light p-1">Redação de Conteúdos</h5>
                            <a href="#" class="btn pink-color">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div class="section-title text-center my-5">
                    <h2 class="text-light">Aprendemos com os melhores para entregar o melhor</h3>
                        <p class="text-secondary">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 100% Satisfação ---------------------------------------------------------------------------- -->
    <section
        style="background: rgb(2,3,18);
background: linear-gradient(180deg, rgba(2,3,18,1) 50%, rgba(29,30,50,1) 50%);">
        <div class="container">
            <div
                class="mediator pink-color text-black d-md-flex text-center justify-content-evenly align-items-center flex-row fw-bold rounded-3">
                <div class="wrapper">
                    <p class="mediator-title">100%</p>
                    <p class="mediator-description">Satisfação de Clientes</p>
                </div>
                <div class="wrapper">
                    <p class="mediator-title">24/7</p>
                    <p class="mediator-description">Suporte a clientes</p>
                </div>
                <div class="wrapper">
                    <p class="mediator-title">+ 10</p>
                    <p class="mediator-description">Planos diferentes</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Section Blog Preview ---------------------------------------------------------------------------- -->
    <section class="blog mb-5">
        <div class="container text-center py-5">
            <h3 class="pink-color-text fs-5 pt-5" style="text-transform: uppercase;">Ultimas Noticias</h3>
            <h2 class="text-light fw-bold mb-5 fs-1" style="text-transform: uppercase;">Nosso blog</h2>
            <div class="row g-2 text-center">
                @foreach ($recentPosts as $post)
                    <div class="col-md-6">
                        <div class="card2">
                            <div class="card-body text-start">
                                <div class="d-flex">
                                    <span class="badge pink-color obsidian-shard-text me-3">TECNOLOGIA</span>
                                    <span class="badge pink-color obsidian-shard-text">MARKETING</span>
                                </div>
                                <a href="{{ route('post.show', $post->id) }}" class="post-preview text-light"
                                    style="text-decoration: none;">
                                    <h5 class="card-title p-2" style="margin-left: -8px">{{ $post->title }}</h5>
                                </a>
                                <h6 class="card-subtitle mb-2 card1-subtitle-color"> Escrito por: <span
                                        class="fw-bold">{{ $post->user->name }}</span> em: <span
                                        class="fw-bold">{{ $post->created_at->format('Y-m-d') }}</span></h6>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($posts->isEmpty())
                    <p>Nenhuma notícia disponível no momento.</p>
                @else
                    @foreach ($posts as $post)
                        <div class="text-center w-100 btnpreviewblog">
                            <a class="btn pink-color fw-bold my-4 w-100 py-3" href="{{ route('blog', $post->id) }}">Ver
                                Mais
                                Noticias</a>
                        </div>
                    @endforeach
            </div>
            @endif
    </section>

    <!-- Section Testemunhos ---------------------------------------------------------------------------- -->
    <section class="testemunhos my-5">
        <div class="container">
            <div class="testemunhos-title d-flex justify-content-between my-5">
                <div class="w-text">
                    <h3 class="lead fs-5 pink-color-text" style="text-transform: uppercase;">O que os clientes dizem</h3>
                    <h2 class="fw-bold fw-2 text-light fs-1" style="text-transform: uppercase;">Testemunhos</h2>
                </div>
                <div class="d-flex gap-4">
                    <img src="images/arrow-left.svg" alt="arrow-left" class="light-gray-bg px-4 rounded-1">
                    <img src="images/arrow-right.svg" alt="arrow-right" class="pink-color px-4 rounded-1">
                </div>
            </div>

            <!-- Controles do Carousel ---------------------------------------------------------------------------- -->
            <div id="carouselExampleIndicators2" class="carousel slide">
                <div class="carousel-indicators" style="top: 310px;">
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <!-- Primeiro SLIDE ---------------------------------------------------------------------------- -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex g-4">
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Fabio Carvalho</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Roberto Carlos Carvalho</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">João Junior Carvalho</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEGUNDO SLIDE ---------------------------------------------------------------------------- -->
                    <div class="carousel-item">
                        <div class="row d-flex g-4">
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Gabriel de Paula</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Amanda Soares</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Kleber Junior</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TERCEIRO SLIDE ---------------------------------------------------------------------------- -->
                    <div class="carousel-item">
                        <div class="row d-flex g-4">
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Fabio Carvalho</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Yan Giussiepe</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card1">
                                    <p class="card-text lead text-secondary p-4">Amet minim mollit non deserunt ullamco est
                                        sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit
                                        exercitation veniam.</p>
                                    <div class="star-filled d-flex px-4">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                        <img src="images/star-filled.svg" alt="star-filled">
                                    </div>
                                    <div class="user-content d-flex p-4">
                                        <img src="images/avatar-img.svg" alt="" class="me-3">
                                        <div class="user-content-text">
                                            <p class="text-light fw-4 fw-bold m-0">Lucas Almeida</p>
                                            <p class="fw-5 text-secondary m-0">24 de julho de 2023 - E-Commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botão Controles Carousel ---------------------------------------------------------------------------- -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Section Newsletter ---------------------------------------------------------------------------- -->
    <section class="newsletter text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column">
                    <h2 class="h2-newsletter mb-4 fs-1">Receba todas as noticias da <span
                            class="karvz-text-logo">Karvz</span> <br> diretamente no seu Email</h2>

                    <input type="email" name="Email-Newsletter" id="Email-Newsletter"
                        class="Email-Newsletter mb-4 p-3" placeholder="Insira seu melhor e-mail">
                    <a class="btn pink-color px-4 text-black btnnewsletter py-3" href="#" role="button">quero me
                        inscrever e receber notícias</a>
                </div>
            </div>
        </div>
    </section>
@endsection
