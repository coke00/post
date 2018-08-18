<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'DiosasChile') }}</title> --}}
    <title>DiosasChile</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  {{-- <div class="loader"></div> --}}
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>


                <a class="navbar-brand" href="{{ url('/inicio') }}">
                    DiosasChile
                </a>

              </div>
              <div class="collapse navbar-collapse" id="myNavbar">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link titulos" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>

                            <!--si queremos agregar un loggin separado -->
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @include('voyager::login')

                        @else
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin') }}">{{ __('Administrar') }}</a>
                          </li>
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="nav-item dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Session') }}
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
        </nav>

        </div>
        <style>
        /* Hide AddToAny vertical share bar when screen is less than 980 pixels wide */
        /* https://www.addtoany.com/buttons/customize/floating_share_buttons */
        @media screen and (max-width: 980px) {
            .a2a_floating_style.a2a_vertical_style { display: none; }
        }
        </style>
        <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_google_plus"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        </div>

        <script async src="https://static.addtoany.com/menu/page.js"></script>
          <div class="container-fluid ">
            <div class="col-md-8">
              @yield('content')
            </div>
            <div class="col-md-3">
              @yield('right')
            </div>

          </div>
          <div class="container-fluid">
            <div class="col-md-12">
              @yield('perfile')
            </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

          <footer id="footer-site">
             <div class="footer-top">
                <div class="container">
                   <div class="row">
                      <div class="logo"> <a href="localhost:8000"> <img src="#" alt=""> DiosasChile</a></div>
                      <div class="menus">
                         <div class="menu">
                            <ul>
                               <li><a href="https://plaemst.cl">Inicio</a></li>
                               <li><a href="#">Acceso Clientes</a></li>
                               <li><a href="#">Contacto</a></li>
                               <li><a href="#">Anunciate</a></li>
                            </ul>
                         </div>
                         <div class="menu">
                            <ul>
                               <li class="first"><a href="#">ESCORTS VIP</a></li>
                               <li><a href="#">ESCORTS PREMIUM</a></li>
                               <li><a href="#">ESCORTS GOLD</a></li>
                               <li class="last"><a href="#">ESCORTS SILVER</a></li>
                            </ul>
                         </div>
                         <div class="menu">
                            <ul>
                               <li class="first"><a href="#">Acceso a Plataforma</a></li>
                               {{-- <li><a href="#">MUJERES MASAJISTAS</a></li> --}}
                               {{-- <li><a href="#">MUJERES UNDER</a></li> --}}
                               <li class="last"><a href="#">ACCESO CLIENTES</a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="text">
                         <p> Portal sobre escorts y acompañantes para mayores de 18 años. Todas las anunciantes han sido entrevistadas personalmente.<br> No poseemos vinculación laboral con las anunciantes y nos limitamos exclusivamente a brindar un servicio publicitario. Somos un medio publicitario legalmente constituido.<br> Nos reservamos el derecho a publicación.<br> Queda prohibida la copia o reproducción, total o parcial.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="footer-bottom">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <p> © 2018 DiosasChile, Los Angeles de Chile, Todos los derechos reservados | <a href="/sitemap" style="color: white;">Mapa del sitio</a></p>
                      </div>
                   </div>
                </div>
             </div>
          </footer>
          <script type="text/javascript">
          $(window).load(function() {
              $(".loader").fadeOut("slow");
          });
          </script>
</body>
</html>
