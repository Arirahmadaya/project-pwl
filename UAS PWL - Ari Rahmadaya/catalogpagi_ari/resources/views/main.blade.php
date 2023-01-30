<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" >
    <link href="{{asset ('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-lg " style="background: -webkit-linear-gradient(top, #c971c5, #64a192)">

        <div class="container-fluid">
        <a href="" class="navbar-brand">
            ArCommerceenya3
        </a>

        <button type="button" class="navbar-toggler"
            data-bs-toggle="collapse" 
            data-bs-target="#menusaya">
                <i class="navbar-toggler-icon"></i>
            </button>   
        <div class="collapse navbar-collapse" id="menusaya">
            <ul class="navbar-nav ms-auto" >
                <li class="nav-item">
                    <a style="color :rgb(255, 255, 255)" b href="{{url('/')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a style="color :rgb(255, 255, 255)" b href="{{url('/shopping-ari')}}" class="nav-link">Shopping Form</a>
              </li>
                <li class="nav-item">
                  <a style="color :rgb(255, 255, 255)" href="{{url('catalog')}}" class="nav-link">Catalog</a>
                </li>
                
                @if(Auth::user())
                <li class="nav-item dropdown">
                    <a style="color :rgb(255, 255, 255)" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Akun Saya
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('profile')}}">Profile</a></li>
                      <li><a class="dropdown-item" href="{{url('category')}}">Category Data</a></li>
                      <li><a class="dropdown-item" href="{{url('product')}}">Product Data</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a style="color :rgb(1, 26, 29)" style="" href="{{url('login')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a style="color :rgb(1, 26, 29)" href="{{url('register')}}" class="nav-link">Register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
