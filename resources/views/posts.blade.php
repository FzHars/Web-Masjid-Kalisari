{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://picsum.photos/600/400?{{ $posts[0]->category->name }}" class="card-img-top center center"
                height="300px" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a
                        href="/post/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                </h3>
                <p>
                    <small class="text-body-secondary">
                        By : <a href="/authors/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>
    @endif
    <hr>
    {{-- <div class="row"> --}}
    <div class="row row-cols-1 row-cols-md-2 g-4 ">
        @foreach ($posts->skip(1) as $post)
            <div class="col">
                <div class="card h-100">
                    {{-- <img src="https://picsum.photos/1200/400?random" height="200px" class="card-img-top" alt="cc"> --}}
                    <div class="position-absolute top-0 end-0  rounded-4 fs-5 px-3 py-2 me-2 mt-2"
                        style="background-color: rgba(0, 0, 0, 0.5)">
                        <a href="/categories/{{ $post->category->slug }}"
                            class="text-white text-decoration-none">
                            {{ $post->category->slug }}
                        </a>
                    </div>
                    <img src="https://picsum.photos/600/400?{{ $post->category->name }}" height="200px"
                        class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-body-secondary">
                                By : <a href="/authors/{{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- </div> --}}
@endsection
