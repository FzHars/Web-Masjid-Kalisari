@extends('layouts.main')

@section('container')
    <h1>{{ $post->title }}</h1>

    <h5>By : <a href="#">{{$post->user->name}}</a>  in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

    {!! $post->body !!}
    {{-- escape character --}}
    {{-- {{ $post->body }} --}}
    <hr>
    <a href="/posts" class="text-decoration-none">Kembali ke Posts</a>
@endsection
