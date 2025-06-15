{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-4">{{ $title }}</h1>
    <div class="container p-0 my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($categories as $category)
                <div class="col">
                    <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img src="https://picsum.photos/500/400?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-end  px-0">
                            <h5 class="card-title flex-fill text-center p-3 m-0 fs-3" style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}</h5>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
