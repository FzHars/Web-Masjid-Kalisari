{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($authors as $author)
        <h2>
            <a href="/authors/{{ $author->username }}"> {{ $author->name }}
            </a>
        </h2>
    @endforeach
@endsection
