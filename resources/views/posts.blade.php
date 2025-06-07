{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/post/{{$post["slug"]}}"> {{ $post['judul'] }}

                </a>
            </h1>
            <h5>By : {{ $post['penulis'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
