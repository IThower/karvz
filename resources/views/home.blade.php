
@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <span class="badge rounded-pill pink-color obsidian-shard-text mt-5 mb-2 text-uppercase">Top Trending</span>
                <h1 class="text-light fw-bold">Como aumentar suas vendas.</h1>
                <p class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, illo
                    eos. Delectus nostrum placeat
                    omnis reiciendis quo perspiciatis dolores, officia autem. Quisquam in repellendus culpa
                    laboriosam asperiores dolorum? Qui, magnam!</p>
                <a class="btn pink-color px-4 obsidian-shard-text fw-bold text-uppercase" href="#" role="button">Quero Vender Mais</a>
            </div>
            <div class="col-12 col-md-6 text-center">
                <img src="/images/currency-monochromatic-12-x.svg" alt="" class="">

            </div>
            <div class="col-12 text-center">
                <img src="/images/scroll.svg" alt="" class="img-fluid">
            </div>

        </div>
    </div>
</section>

<section class="servicos py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h3 class="pink-color-text">Nós te ajudamos com</h3>
            <h2 class="text-light">OS NOSSOS SERVIÇOS</h2>
        </div>

        <div class="row g-2 text-center ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/card-1.svg" alt="" class="img-fluid">
                        <h5 class="card-title text-light">Design de Website &
                            Desenvolvimento</h5>
                        <a href="#" class="btn pink-color">Veja Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/card-2.svg" alt="" class="img-fluid">
                        <h5 class="card-title text-light">Otimização de
                            Mecanismos de Busca</h5>
                        <a href="#" class="btn pink-color">Veja Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/card-3.svg" alt="" class="img-fluid">
                        <h5 class="card-title text-light">Marketing de
                            Redes Sociais</h5>
                        <a href="#" class="btn pink-color">Veja Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="images/card-4.svg" alt="" class="img-fluid">
                        <h5 class="card-title text-light">Marketing de
                            Redes Sociais</h5>
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


<div class="container">
    <div class="mediator pink-color text-black d-md-flex text-center justify-content-evenly align-items-center flex-row fw-bold">

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

<section class="blog">
    <div class="container text-center py-5">
    <h3 class="pink-color-text fs-5 pt-5">Ultimas Noticias</h3>

    <h2 class="text-light fw-bold">NOSSO BLOG</h2>
</div>
</section>


<section class="newsletter text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">

                <h2 class="h2-newsletter mb-3">Receba todas as noticias da karvz diretamente no seu Email</h2>
                <input type="email" name="Email-Newsletter" id="Email-Newsletter" class="Email-Newsletter mb-4 p-3" placeholder="Insira seu melhor e-mail">
                <a class="btn pink-color px-4 text-black btnnewsletter py-3" href="#" role="button">quero me inscrever e receber notícias</a>

            </div>
        </div>
    </div>
</section>
@endsection
