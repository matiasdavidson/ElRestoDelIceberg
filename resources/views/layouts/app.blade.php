@php
  use App\Product;
  use App\Category;
  use App\Diet;
  use App\Attribute;
  use App\User;


  // $categories = Categories::all();
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato|Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/loginstyles.css">
    <link rel="stylesheet" href="/css/indexstyles.css">
    <meta charset="utf-8">

    <link rel="icon" href="https://image.flaticon.com/icons/png/512/641/641985.png">

    <title>@yield('pageTitle')</title>
  </head>
  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <div class="container-index">
      {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  El Resto del Iceberg
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav> --}}
      <!-- hay dos nav bars. la de arriba es la que tiene class="la-de-arriba" y la otra en la class tiene algo de bootstrap -->

      <header>

{{-- NAV DE AMBAS LINEAS DE  MOBILE --}}
<nav class="fixed-top">
        <!-- LA PRIMER NAV BAR MOBILE-->

       <nav class="la-de-arriba" style="background-color:white">
        <a class="nav-link dropdown-toggle navbutton" href="#" id="navbarDropdow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search navbutton"></i>
        </a>

       <div class="dropdown-menu busqueda-primer-navibar navbutton" aria-labelledby="navbarDropdown">
        <div class="dropdown-item">

          <form class="form my-2 my-lg-0" action="/search" method="get">
            <input name="search" class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="" value="">
          </form>

        </div>
      </div>
      <li class="nav-item dropdown" id="user">
        <a class="nav-link dropdown-toggle navbutton" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <?php if (Auth::check()): ?>
          <div class="dropdown-menu user-desktop navbutton" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/user/{{Auth::user()->id}}">Perfil</a>
            <div class="dropdown-divider"></div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" id="logoutbutton" type="submit" name="">Log Out</button>
            </form>
          </div>
      <?php else : ?>
        <div class="dropdown-menu primer-user navbutton" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('login') }}">Entrar</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{ route('register') }}">Registrarme</a>
          </div>
      <?php endif; ?>

      </li>
      <li class="nav-item" id="cart">
        <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart navbutton"></i></a>
      </li>
      </nav>

      <!-- LA SEGUNDA NAV BAR MOBILE-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="la-segunda">

 <a href="/"><img id="icon23" class="iconoiceberg" src={{ asset("/images/iconIceberg.png") }} alt=""></a>
         <a class="navbar-brand" href="/"><small>El Resto del Iceberg</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" id="categoria-menu">
              <a class="nav-link" href="/categories" name="category" style="text-align:center; text-decoration:none; color:#393D40">Categorías</a>
            </li>
            <li class="nav-item active" id="categoria-menu">
              <a class="nav-link" href="/diets" name="category" style="text-align:center; text-decoration:none; color:#393D40">Dietas</a>
            </li>
            <li class="nav-item active" id="categoria-menu">
              <a class="nav-link" href="/attributes" name="category" style="text-align:center; text-decoration:none; color:#393D40">Atributos</a>
            </li>
          </ul>
        </div>
      </nav>
{{-- FIN NAVBAR DOBLE MOBILE --}}
    </nav>

      <!-- NAV BAR DESKTOP -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar-desktop">
             <a href="/"><img id="icon23" class="iconoiceberg" src={{ asset("/images/iconIceberg.png") }} alt=""></a>
          <a class="navbar-brand" href="/">El Resto del Iceberg</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          {{-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active" id="categoria-menu"> --}}

        <div class="dropdown" style="margin-left:2em">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #EE7500">
            Categorías
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="overflow-y:scroll; max-height:30em">
          @foreach (Category::all() as $category)
            <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:#393D40">{{$category->categoryName}}</a>
          @endforeach
        </div>
        </div>

        <div class="dropdown" style="padding-left:1em">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #D69764">
            Dietas
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="overflow-y:scroll; max-height:30em">
          @foreach (Diet::all() as $diet)
            <a class="nav-link" href="/diet/{{$diet->id}}" name="diet" style="text-align:center; text-decoration:none; color:#393D40">{{$diet->dietType}}</a>
          @endforeach
        </div>
        </div>


        <div class="dropdown" style="padding-left:1em">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #EE7500">
            Atributos
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="overflow-y:scroll; max-height:30em">
          @foreach (Attribute::all() as $attribute)
            <a class="nav-link" href="/attribute/{{$attribute->id}}" name="diet" style="text-align:center; text-decoration:none; color:#393D40">{{$attribute->attributeName}}</a>
          @endforeach
        </div>
        </div>

            {{-- @foreach (Category::all() as $category)
            @if ($category->categoryName == "Frutos secos")
              <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:black">
        {{$category->categoryName}}
      </a>
    @endif
    @if ($category->categoryName == "Especias")
    <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:black">
      {{$category->categoryName}}
    </a>
    @endif
    @if ($category->categoryName == "Harinas y avenas")
    <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:black">
      {{$category->categoryName}}
    </a>
    @endif
    @if ($category->categoryName == "Barras de cereal")
    <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:black">
      {{$category->categoryName}}
    </a>
    @endif
    @if ($category->categoryName == "Jugos y bebidas")
    <a class="nav-link" href="/category/{{$category->id}}" name="category" style="text-align:center; text-decoration:none; color:black">
      {{$category->categoryName}}
    </a>
    @endif
    @endforeach --}}



{{--
        </li>
      </ul> --}}



        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <form class="form-inline md-form form-sm mt-0" action="/search" method="get" >
            <i class="fas fa-search navbutton" aria-hidden="true"></i>
            <input name="search" class="form-control form-control-sm ml-3 w-75 searcher" type="text" placeholder="Buscar" aria-label="" value="">
            <input type="submit" class="enterSearch">
          </form>

          <a class="nav-link dropdown-toggle busqueda navbutton" href="#" id="navbarDropdow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search navbutton"></i>
          </a>

          <div class="dropdown-menu busqueda-navibar-desktop navbutton" aria-labelledby="navbarDropdown">
            <div class="dropdown-item">
              <form class="form my-2 my-lg-0" action="/search" method="get">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="" value="">
              </form>
            </div>
          </div>

          <!-- <ul class="navbar-nav mr-auto"> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle navbutton" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <?php if (Auth::check()): ?>
                <div class="dropdown-menu user-desktop navbutton" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/user/{{Auth::user()->id}}">Perfil</a>
                <div class="dropdown-divider"></div>
                <form class="dropdown-item" id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" id="logoutbutton" type="submit" name="">Log Out</button>
                </form>
                </div>
              </li>
              <?php else: ?>
                <div class="dropdown-menu user-desktop navbutton" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('login') }}">Entrar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('register') }}">Registrarme</a>
                </div>
              <?php endif; ?>
          <!-- </ul> -->
        </div>

      <a href="/cart"><i class="fas fa-shopping-cart navbutton"></i></a>
        </nav>
      </header>

@yield('content')
<!-- FOOTER -->

<footer class="page-footer font-small blue pt-4" class="footercolor">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">
     <a href="/"><img class="iconoiceberg" src={{ asset("/images/iconIceberg.png") }} alt=""></a>
          <h5 class="text-uppercase">El Resto del Iceberg</h5>
          <p>Todo lo que no te cuentan, te lo contamos nosotros.</p>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

            <h5 class="text-uppercase">Contacto</h5>

            <ul class="list-unstyled">
              <li>
              <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <p><i class="fas fa-phone"></i> (011) 41234567</p>
              </li>
              <li>
                <p><i class="fas fa-headset"></i> Lunes a viernes 09:00 a 20:00</p>
              </li>
              <li>
                <p>elrestodeliceberg@gmail.com</p>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Links útiles</h5>
            <ul class="list-unstyled">
              <li>
                <a href="index.php" class="footerlinks">Promociones</a>
              </li>
              <li>
                <a href="index.php" class="footerlinks">Terminos y condiciones</a>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <!-- Subscripción al newsletter -->
    <form class="text-center border border-light">
    <div class="">
    <small id="emailHelp" class="form-text text-muted"> Suscribite a nuestro newsletter para recibir las ofertas más piolas </small>
      <small id="emailHelp" class="form-text text-muted"> </small>
      </div>
      <div class="botonessuscribir" style="display:flex">

      <input type="email" id="defaultSubscriptionFormEmail" class="form-control botonindividualsuscibir" placeholder="Correo">
      <button class="btn btn-info btn-block botonindividualsuscibir" type="submit">Suscribirse</button>
    </div>
    </form>

      <!-- Copyright -->
  <div class="footer-copyright text-center">© 2019 Copyright:
    <p href="https://elrestodeliceberg.com/"> El Resto Del Iceberg®</p>
  </div>
  <!-- Default form subscription -->
  </footer>



</div>
    <script src="/js/layouts.js"></script>
    <script src="/js/productappear.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
