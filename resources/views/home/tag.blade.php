@extends('home.layouthome')
@section('css')
    <link rel="stylesheet" href="http://localhost/forum/resources/css/home/genre.css">
    <link rel="stylesheet" href="http://localhost/forum/resources/css/home/home.css">
@endsection
@section('konten')
<div id="tags">
    <div class="container">
        <h1>Anime Genre {{ $post->nama }}</h1>
        <div class="row">
            @foreach ($read as $re)
                <div id="kotak" class="col-5 col-sm-6 col-md-2">
                    <a href="{{ URL::to('anime/'. $re->slug) }}">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/forum/resources/img/{{ $re->gambar }}" alt=""> 
                            <div class="card-body">
                                <p>{{ $re->nama }}</p>
                            </div>
                        </div>
                    </a>
                </div> 
            @endforeach
        </div>
    </div>
</div>
@endsection