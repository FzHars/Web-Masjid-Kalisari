@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-4">{{ $post->title }}</h1>
                <h5>By : <a
                        href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></h5>
                <img src="https://picsum.photos/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid ">
                <article class="my-4 fs-5">
                    {!! $post->body !!}
                </article>
                {{-- escape character --}}
                {{-- {{ $post->body }} --}}
                <a href="/posts" class="text-decoration-none">Kembali ke Posts</a>
            </div>
        </div>
    </div>
@endsection
