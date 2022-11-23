<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/28670fc814.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
     
<style>
</style>
<body id="img2">
  <div class=" position-fixed"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
          <a class="navbar-brand text-primary" href="#"><h2>First Education</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto ml-5 mb-lg-0">
                <li class="nav-item d-flex">
                  @if (auth('customer')->check())
                      <a href="">Home</a>
                      <a href="{{route('customer_logout')}}">logout</a>
                      @else
                      <a href="{{ route ('customer_login')}}">login</a>
                      <a href="{{ route('customer_register') }}" class=" nav-link active text-primary" target="_blank">Register</a>
                  @endif    
                      </li>

                      <li class="nav-item dropdown ml-5">
                          <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{route('fontend')}}">hello</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                      </li>
                      <li class="nav-item ml-5">
                          <a class="nav-link disabled text-primary">Disabled</a>
                      </li>
              </ul>
                      <form class="d-flex mr-5 ">
                      <input class="form-control me-3 bg-dark " type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-primary " type="submit">Search</button>
                      </form>
                        
          </div> 
    </nav>
    {{-- endnavbar --}}
             
                   
                     
              <div id="carouselExampleIndicators" class="carousel slide w-100 d-flex rounded-3"  data-bs-ride="carousel">
                <div class="col-4">
                                   
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active h-75">
      <img src="images/car1.jpg" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/car2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/car3.jpg" class="d-block w-100" alt="...">
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>  
  </button> 
  </div>
  <section>
<div class="text mt-1">
  <h2 class="text-primary text-center">Impossible Bureauf</h2>
  <p class=" text-center m-2">Animation on click is a default launching option, so it does not require any data-mdb-attribute.</p>
 
</div> 
      <div class="icon ml-5 mt-4">
        <a href=""><i class="fa-solid fa-gear  fa-beat ml-5 fa-lg text-light"></i></a>
        <a href=""> <i class="fa-brands fa-facebook  fa-beat ml-4 fa-lg text-light"></i></a>
        <a href=""> <i class="fa-solid fa-bars  fa-beat ml-4 fa-lg text-light"></i></a>
        <a href=""> <i class="fa-brands fa-github  fa-beat ml-4 fa-lg text-light"></i></a>
        <a hre f=""><i class="fa-brands fa-youtube  fa-beat ml-4 fa-lg text-light"></i></a>
        <a href=""><i class="fa-brands fa-google  fa-beat ml-4 fa-lg text-light"></i></a>
      </div>
    </section>
</div>
 
   <div id="img">
    <video autoplay muted controls loop> 
      <source src="{{URL::asset("/images/Car.mp4")}}">
    </video>
    </div>
  </div>     
  </div>  
  </div>
</body>
</html>