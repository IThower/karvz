
@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <span class="badge rounded-pill pink-color mt-5 mb-2">Top Trending</span>
                <h1 class="text-light">Como aumentar suas vendas.</h1>
                <p class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, illo
                    eos. Delectus nostrum placeat
                    omnis reiciendis quo perspiciatis dolores, officia autem. Quisquam in repellendus culpa
                    laboriosam asperiores dolorum? Qui, magnam!</p>
                <a class="btn pink-color px-4 text-black" href="#" role="button">Quero Vender Mais</a>
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

<section class="servicos">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h3 class="pink-color-text">Nós te ajudamos com</h3>
            <h2 class="text-light">OS NOSSOS SERVIÇOS</h2>
        </div>

        <div class="row text-center">
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
                        <h5 class="card-title text-light">Redação de
                            Conteúdo</h5>
                        <a href=" #" class="btn pink-color">Veja Mais</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="section-title text-center mb-5">
            <h2 class="text-light">Aprendemos com os melhores para entregar o melhor</h3>
                <p class="text-secondary">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                </p>
        </div>
    </div>
    </div>
</section>


<div class="container">
    <div class="mediator pink-color text-black text-center fw-bold pt-5 pb-5">

        <p class="mediator-title">100%</p>

        <p class="mediator-description mb-5">Satisfação de Clientes</p>

        <p class="mediator-title">24/7</p>

        <p class="mediator-description mb-5">Suporte a Clientes</p>

        <p class="mediator-title">+ 10</p>

        <p class="mediator-description">Planos Diferentes</p>


    </div>
</div>

<section class="blog">

    <h3 class="pink-color-text">Ultimas Noticias</h3>

    <h2 class="text-light">NOSSO BLOG</h2>

</section>
@endsection
