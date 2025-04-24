@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/civic_typeR.png',
        'title' => 'Honda Civic type R : Perpaduan Gaya dan Performa',
        'desc' => 'Mobil Sport legendaris dengan desain agresif dan mesin turbo bertenaga, cocok untuk pecinta kecepatan dan gaya.'
    ])
@endsection
