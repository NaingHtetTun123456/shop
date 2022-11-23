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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    /* body {
  background-image:url(images/img2.jpg);
  background-size: cover;
  background-repeat: repeat-x;
} */
</style>
<body>
           <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="bg-transparent">
  <!-- Left navbar links -->
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>Search
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <a href="{{ url('http://127.0.0.1:8000') }}" class="text-decoration-none text-dark"><i class="fa-sharp fa-solid fa-xmark"></i></a>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-white-primary elevation-4" >
  <!-- Brand Logo -->
      <h2 class="mt-3 ms-3 text-primary">First Education</h2>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block font-italic text-primary  text-decoration-none"><h2>{{ Auth::user()->name }}</h2></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-10">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          {{-- <a href="#" class="nav-link active">
              <i class="fa-solid fa-play"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a> --}}
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="{{ route('admin') }}" class="nav-link active">
                  <i class="fa-regular fa-pen-to-square"></i>
                <p>Dashboard</p>
              </a>
            </li> --}}

            <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="fa-sharp fa-solid fa-list"></i>
                <p>Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('brand.index') }}" class="nav-link">
                  <i class="fa-sharp fa-solid fa-tags"></i>
                <p>Brands</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('product.index') }}" class="nav-link">
                  <i class="fa-sharp fa-solid fa-tags"></i>
                <p>Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin') }}" class="nav-link">
                  <i class="fa-sharp fa-solid fa-tags"></i>
                <p>dashboard</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <form action={{ route('logout') }} method="POST" class="nav-link text-center">
              @csrf
              <button class="btn display-1 btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
      
  <div class="content-wrapper wrapper">
    @yield('content')
</div>
    

</body>
</html>