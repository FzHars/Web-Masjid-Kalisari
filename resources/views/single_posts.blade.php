
@extends('layouts.main')

@section('container')
    <h1>{{$post["judul"]}}</h1>
    <h5>{{$post["penulis"]}}</h5>
    <p>{{$post["body"]}}</p>

    <a href="/posts">Kembali ke Posts</a>
@endsection
