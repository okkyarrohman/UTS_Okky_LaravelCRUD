<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-50 dark:bg-gray-900 sm:items-center py-2 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                    </div>
            </div>
                        <div class="login">
                            <button type="button" class="btn btn-secondary">
                                <a href="{{ route('login') }}" style="font-size: 15px" >Log in</a>
                            </button>
                        </div>
                        <br>
            
                            @if (Route::has('register'))
                        <div class="register">
                            <button type="button" class="btn btn-secondary">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-300 dark:text-gray-150 underline" style="font-size: 15px">Register</a>
                            </button>
                        </div>
                                @endif
                        @endauth
                    </div>
                @endif
                
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>











    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="guru1.jpeg" class="d-block w-100" alt="gambar 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Penunjang Untuk Administrasi </h5>
              <p>Sebagai bentuk kegiatan arsip dilingkungan sekolah yang terupdate</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="guru2.jpg" class="d-block w-100" alt="gambar 2">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: black">Disupport langsung oleh PD Dikti</h5>
              <p style="color: black">PD Dikti merupakan pangkalan data yang bertugas untuk menyimpan arsip diseluruh lembaga pendidikan diindonesia</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="guru3.jpg" class="d-block w-100" alt="gambar 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Legalitas itu perlu</h5>
              <p>legaslitas sangatlah diperlukan dalam menunjang kegiatan disekolah</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      @yield('main-nav')








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</body>
</html>