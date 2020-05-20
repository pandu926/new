@extends('home.layouthome')

@section('css')
    <link rel="stylesheet" href="http://localhost/forum/resources/css/home/home.css">
    <link rel="stylesheet" href="http://localhost/forum/resources/css/demo.css">
    <link rel="stylesheet" href="http://localhost/forum/resources/dist/jquery.flipster.min.css">
    <script src="http://localhost/forum/resources/dist/jquery.flipster.min.js"></script>
@endsection

@section('konten')
<h4 id="head" class="text-center mt-4">selamat datang di portal download anime terlengkap subtitle indonesia</h4>

<div class="container mt-4">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-2">
      
    </div>
    <div class="col-2">
      
    </div>
    <div class="col-4"></div>
  </div>
</div>
<h2 class="text-center">Update Anime Winter 2020</h2>
 <!-- membuuat isi -->
  
 <div class="container">
 <article id="demo-carousel" class="demo">
  <div id="carousel">
      <ul class="flip-items" id="cra">
        @for ($i=0;$i<10;$i++)
        <li>
          <img src="https://media.japanesestation.com/images/750x422/2016/03/Serial-anime-Gintama-yang-tayang-di-Jepang-akan-tamat2.jpg">
        </li>  
        @endfor
        
          
      </ul>
  </div>

<script>
  var carousel = $("#carousel").flipster({
      style: 'carousel',
      spacing: -0.5,
      buttons:   true,
      autoplay: 1000,
      loop : true
  });
</script>



</article>
</div>

<div id="garis2" class="container">
<div class="row">
  <div class="col-2">

  </div>
  <div class="col-8 text-center">
    <hr id="garis" />
  </div>
  <div class="col-2" ></div>
</div>
</div>

<!-- membuat header kontent -->
<div id="header-content">
<div class="container mt-5">
  <div class="row text-center justify-content-end">
    <div class="col">
      <p>Update terbaru</p>
    </div>
    <div class="col">
      <a href="">Selengkapnya</a>
    </div>
  </div>
</div>
</div>  

<!-- membuat isi -->
<div id="UploadTerbaru">
<div class="container">
    <div class="row">
         @foreach($daftar as $dfr)
            <div id="kotak" class="col-5 col-sm-6 col-md-2">
                <a href="{{ URL::to('anime/'. $dfr->slug) }}">
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/forum/resources/img/{{ $dfr->gambar }}" alt=""> 
                        <div class="card-body">
                            <p>{{ $dfr->nama }}</p>
                        </div>
                    </div>
                </a>
            </div> 
         @endforeach  
    </div>
</div>
</div>
@endsection