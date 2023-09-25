@extends('layouts.app')

@section('content')
    <header class="masthead text-light" style="background-image: url('img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1 class="text-center mb-4">{{ $post->title }}</h1>
                        <div class="d-flex column-gap-3">
                            <h2></h2>
                            <span>Data:
                                @if ($post->created_at)
                                    {{ $post->created_at->format('d/m/20y') }}
                                @else
                                    Data Desconhecida
                                @endif
                            </span>
                            <span>Postado por:
                                @if ($post->user)
                                    <a href="#!">{{ $post->user->name }}</a>
                                @else
                                    Usuario Desconhecido
                                @endif
                            </span>
                            <span>Categorias: </span>
                        </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article class="pb-5 light-gray-bg">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7 mt-4 text-light">
                    <p>
                        {{ $post->description }}
                    </p>
                    @if (Auth::check() && $post->user && $post->user->id == Auth::user()->id)
                        <div class="d-flex justify-content-end">

                            <div>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary px-4" href="{{ route('posts.edit', $post->id) }}">Editar</a>

                                    <button type="submit" class="btn btn-danger px-4">Deletar</button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </article>

    <section class="blog mb-5 obsidian-shard-bg">
        <div class="container text-center py-5">
            <h3 class="pink-color-text fs-5 pt-5" style="text-transform: uppercase;">Ultimas Noticias</h3>
            <h2 class="text-light fw-bold mb-5 fs-1" style="text-transform: uppercase;">Nosso blog</h2>
            <div class="row g-2 text-center">
                @foreach ($recentPosts as $post)
                    <div class="col-md-4">
                        <div class="card2 light-gray-bg" style="height: 150px">
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
                                        class="fw-bold">{{ $post->created_at->format('d/m/20y') }}</span></h6>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($recentPosts->isEmpty())
                    <p>Nenhuma notícia disponível no momento.</p>
                @else
                    <div class="text-center w-100 btnpreviewblog">
                        <a class="btn pink-color fw-bold my-4 w-100 py-3" href="{{ route('blog', $post->id) }}">Ver
                            Mais
                            Noticias</a>
                    </div>
            </div>
            @endif
    </section>



    </section>
@endsection
