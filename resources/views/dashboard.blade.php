@extends('layouts.main')
@section('container')
    <h1> <?php echo $header_d1; ?></h1>
    <h1>{{ $header_d1 }}</h1>
    <img src="img/<?php echo $img; ?>" alt="cek gambar" class="rounded-circle" width="300">
@endsection
