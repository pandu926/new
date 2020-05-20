@extends('home.layouthome')
@section('konten')
    <h1>
        menampilkan tabel pivot
    </h1>

    @foreach($tags as $tag)
        <a href="  {{ URL::to('tags/'. $tag->slug) }}">{{ $tag->nama }}</a>
    @endforeach

 
    
    
@endsection