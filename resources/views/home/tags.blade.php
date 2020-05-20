@extends('home.layouthome')
@section('daftar')
    <div id="tags">
        @foreach ($tags as $tag)
            <a href="">{{ $tag->nama }}</a>
        @endforeach
    </div>
@endsection