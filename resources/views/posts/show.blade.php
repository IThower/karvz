@extends('layouts.app')

@section('content')

<header class="masthead text-light" style="background-image: url('img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Blog Post - dentro</h1>
                    <h2 class="subheading">{{ $post->title }}</h2>
                    <span class="meta">
                        Posted by
                        @if($post->user)
                            <a href="#!">{{ $post->user->name }}</a>
                        @else
                            Usuario Desconhecido    
                        @endif
                        on
                        @if($post->created_at)
                            {{ $post->created_at->format('Y-m-d') }}
                        @else
                            Data Desconhecida
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="section-heading">{{ $post->title }}</h2>
                <p>
                    {{ $post->description }}
                </p>
                @if ($post->user && $post->user->id == Auth::user()->id)
                <div class="d-flex justify-content-end">

                    <div>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>

                @endif
            </div>
        </div>
    </div>
</article>
@endsection
