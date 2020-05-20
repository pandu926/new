@extends('home.layouthome')

@section('css')
    <link rel="stylesheet" href="http://localhost/forum/resources/css/home/download.css">
@endsection

@section('konten')

        <!-- membuat halaman download-->
<div id="header-judul">
    <h1 class=" text-center text-light">{{ $daftar->nama }} Subtitle Indonesia</h1>

    <div class="container">
        <div class="row">
            <div class="col-7 col-md-4 mt-5">
                <p id="tanggal">{{ $daftar->created_at }}</p>
            </div>
            <div class="col-1 col-md-3">

            </div>
            <div class="col-4 col-md-4 mt-5 text-light">
                taik 
            </div>
        </div>
    </div>
</div>
    <!-- isi kontent-->
    <div id="konten-download">
        <div class="container d-lg-flex d-sm-block">
            <div id="img-one" >
                <img class="" src="http://localhost/forum/resources/img/{{ $daftar->gambar }}" alt="">
            </div>
            <div class="isi ml-lg-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, eligendi? Possimus culpa nesciunt repudiandae nobis, eligendi ipsum fuga pariatur repellendus porro architecto, consequatur officiis molestiae laborum quasi temporibus cumque sequi.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias doloribus earum eum quis reiciendis ipsum aperiam. Ducimus nemo in cumque tempora ratione consequatur odit! Sit voluptatem dicta consequatur laboriosam inventore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, incidunt esse vitae earum sunt debitis harum culpa, repellat nisi quis natus molestias? Numquam, dolore. Distinctio pariatur rerum voluptates dolor aspernatur.
            </div>
        </div>
    </div>

    <!-- download link -->
    <div id="download-link">
        <div class="container">
            <p>link download anime </p>
        </div>
        
    </div>
@endsection