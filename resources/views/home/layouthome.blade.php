<!doctype html>
<html lang="en">
  <head>

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/forum/resources/css/bootstrap.css">
    <!-- menghubungkan css external-->
    <link rel="stylesheet" href="http://localhost/forum/resources/css/home/navigasi.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
   
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    @yield('css')
    <!-- kode jquery -->

    <script>
    $(document).ready(function () {
          $("#icon").click(function () {
        $('.menu2').toggleClass('add');
      });
      $("#cari").click(function () {
        $('.pencarian').toggleClass('add');
      });
      $("#close").click(function () {
        $('.menu2').toggleClass('add');
      });
      $("#jembut").click(function () {
        $('.menu2').toggleClass('add');
      });
      ("#cari").click(function () {
        $('.menu2').removeClass('add');
      });
      @yield('jquery')
    });

    </script>

    <title>OPPAINIME</title>
    
  </head>

  <body>
<div id="navigasi-bar">
    <nav id="judu">
      <div class="container">
        <div class="row">
          <div class="col-3 col-md-1">
            <label id="icon"><i class="fas fa-bars"></i></label>
          </div>
          <div class="col-6 col-md-4 text-center " id="bran">
            <a href="{{ URL::to('/') }}">OPPAINIME</a>
          </div>
          <!-- <div class="col-1 col-md-2"></div>
          <div class="col-1 col-md-4">
              <div class="box ">                
                <input type="search" id="search" size="45" placeholder="Search..." />               
              </div>
          </div> -->
          <div class="col-3 col-md-1">
            <label id="cari"><i class="fas fa-search"></i></label>
          </div>
      </div>
    </nav>

    <nav class="menu2">
      <div class="container">
        <div class="row">
          <div id="jembut2" class="col-10">
            <ul id="daftar" class="pt-3 pb-3">
                  <li>
                    <div class="row">
                      <div class="col-10">
                        <a href="#" ><h3 class=" mt-3 mb-2">OPPAINIME</h3></a>
                      </div>
                      <div class="col-2">
                        <label id="close"><i class="fas fa-times pt-3"></i></label>
                      </div>
                    </div>
                  <hr class="mb-2" size="10px">
                  </li>
                  <li><h4>Menu</h4></li>
                  <hr class="mb-2" size="5px">
                  <li>taik</li>
                  <li>jembut</li>
                  <li>eek</li>
                  <li>ipsu</li>
                  <li>daftar</li>
                  
                  <li>ipsu</li>
                  <li>taik</li>
                  <li>jembut</li>
                  <li>eek</li>
                  <li>ipsu</li>
                  <li>daftar</li>
                  
                  <li>ipsu</li>
                  <li>taik</li>
                  <li>jembut</li>
                  <li>eek</li>
                  <li>ipsu</li>
                  <li>daftar</li>
                  
                </ul>
                </div>
    
          <div id="jembut" class="col-2">
      
     </div>
    </div>
    
    
    </div>
    </div>
    </nav>

    <!-- menu saat mode dekstop -->
   <div id="menubar1" class="bg-light">
    <div class="container ">
      <ul id="menubar" class="pt-3 pb-3 justify-content-between">
        <li>
          <a href="#"> Home</a>
        </li>
        <li>
          <a href="#"> Anime</a>
        </li>
        <li>
          <a href="#">Manga</a>
        </li>
        <li>
          <a href="#">Soundtrack</a>
        </li>
        <li>
          <a href="#">Jadwal Rilis</a>
        </li>
        <li>
          <a href="#">Berita </a>
        </li>
        <li>
          <a href="#">Genre</a>
        </li>
        <li>
          <a href="#">Season</a>
        </li>
        <li>
          <a href="#">Forum</a>
        </li>
        <li>
          <a href="#">Voting</a>
        </li>
      </ul>
     </div>
  </div>
</div>  
  
{{-- membuat isi kontent --}}
  @yield('konten')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>  