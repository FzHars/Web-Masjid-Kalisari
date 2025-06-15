{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    {{-- search --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search')}}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    {{-- pagination --}}
    {{$posts->links()}}
    {{-- post top --}}
    @if ($posts->count(0))
        <div class="card">
            <img src="https://picsum.photos/600/400?{{ $posts[0]->category->name }}" class="card-img-top center center"
                height="300px" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a
                        href="/post/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                </h3>
                <p>
                    <small class="text-body-secondary">
                        By : <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>
        {{-- <div class="row"> --}}
        <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
            @foreach ($posts->skip(1) as $post)
                <div class="col">
                    <div class="card h-100">
                        {{-- <img src="https://picsum.photos/1200/400?random" height="200px" class="card-img-top" alt="cc"> --}}
                        <div class="position-absolute top-0 end-0  rounded-4 fs-5 px-3 py-2 me-2 mt-2"
                            style="background-color: rgba(0, 0, 0, 0.5)">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">
                                {{ $post->category->slug }}
                            </a>
                        </div>
                        <img src="https://picsum.photos/600/400?{{ $post->category->name }}" height="200px"
                            class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-body-secondary">
                                    By : <a href="/posts?author={{ $post->author->username }}"
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
    @else
        <p class="text-center fs-3">Nothing Post Here🤔</p>
    @endif
    {{$posts->links()}}
@endsection
