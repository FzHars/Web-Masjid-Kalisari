@extends('layouts.main')

@section('container')
    <h1>{{ $post->title }}</h1>

    <h5>By : {{ $post->author }}</h5>

    {!! $post->body !!}
    {{-- escape character --}}
    {{-- {{ $post->body }} --}}
    <hr>
    <a href="/posts">Kembali ke Posts</a>
@endsection
