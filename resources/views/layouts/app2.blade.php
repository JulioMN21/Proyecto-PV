<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/templates/tu_plantilla/favicon.ico" rel="shortcut icon" type="image/x-icon" >
    <title>PV</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("sweetalert/sweetalert.css")}}">
    <!-- Scripts -->
    <script src="{{asset('sweetalert/sweetalert.min.js')}}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ])!!};
    </script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-static-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>

           @if ((Auth::user()->role_id) === '1'))   
             <a class="navbar-brand" href="{{url('componentes/administrador')}}">
              <img  src="{{ asset('/img/pv.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
              Punto de venta
            </a>
            @else
                <a class="navbar-brand" href="{{url('componentes')}}">
              <img  src="{{ asset('/img/pv.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
              Punto de venta
            </a>
            @endif
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Auth::check()) 
                 <nav class="navbar-nav nav-pills" >
                    @if (Auth()->user()->role_id == 1)   

                      <li class="nav-item dropdown ">
                        <a class="nav-link " 
                         href="{{url('/componentes/')}}" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-usd" aria-hidden="true"></i> VENDER</a>
                        </li>
               

                      <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CLIENTES</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/componentes/clientes/consultar')}}">Catalogo</a>
                        <a class="dropdown-item" href="{{url('/componentes/clientes/registrar')}}">Registrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item  alert-info" href="{{url('/componentes/clientes/clientesDetalladoPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte Detallado</a>

                        <a class="dropdown-item  alert-danger" href="{{url('/componentes/clientes/clientesPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte General</a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/componentes/productos/consultar')}}">Catalogo</a>
                        <a class="dropdown-item" href="{{url('/componentes/productos/registrar')}}">Registrar</a>
                        <div class="dropdown-divider"></div>
                         <a class="dropdown-item  alert-info" href="{{url('/componentes/productos/productosDetalladoPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte Detallado</a>
                        <a class="dropdown-item  alert-danger" href="{{url('/componentes/productos/productosPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte General</a>
                       
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FAMILIAS</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/componentes/familias/consultar')}}">Catalogo</a>
                        <a class="dropdown-item" href="{{url('/componentes/familias/registrar')}}">Registrar</a>
                        <div class="dropdown-divider"></div>
                        <!-- <a class="dropdown-item  alert-info" href="{{url('/componentes/familias/familiasDetalladoPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte Detallado</a> -->
                        <a class="dropdown-item alert-danger" href="{{url('/componentes/familias/familiasPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte General</a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CLASES</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/componentes/clases/consultar')}}">Catalogo</a>
                        <a class="dropdown-item" href="{{url('/componentes/clases/registrar')}}">Registrar</a>
                        <div class="dropdown-divider"></div>
                       <!--  <a class="dropdown-item alert-info" 
                        href="{{url('/componentes/clases/ClasesDetalladoPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte Detallado</a> -->

                        <a class="dropdown-item  alert-danger"
                        href="{{url('/componentes/clases/clasesPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte General</a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USUARIOS</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" 
                        href="{{url('/componentes/user/consultar')}}">Catalogo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item  alert-danger" href="{{url('/componentes/user/UserPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Reporte General</a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">VENTAS</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" 
                        href="{{url('/componentes/ventas/consultar')}}">Catalogo</a>
                        </div>
                        </li>

                    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CAJA</a>
                            <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/componentes/cajas/consultar')}}">Consultar</a>
                        <a class="dropdown-item" href="{{url('/componentes/cajas/registrar')}}">Registrar</a>
                        </div>
                        </li>
                         @endif
                         <li class="nav-item dropdown">
                        <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu">
                        </div>
                        </li>
            </nav>

                @endif


                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link"></a></li>
                </ul>
               
                <form class="form-inline my-2 my-lg-0">
                    <ul class="nav navbar-nav navbar-right  mr-auto">
                        @if (Auth::guest())
                        <!--<li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                        <div class="btn-group">

                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bienvenido {{ Auth::user()->name }}
                    <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                     </button>
                            <div class="dropdown-menu">
                              @if ((Auth()->user()->role_id == 1))  
                                <div class="">
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Nuevo usuario</a></li>
                                </div>


                                <hr>
                                @endif
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out" aria-hidden="true"></i> <strong>Cerrar Sesión</strong>
                                </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                                    </form>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                                    </form>
                                </li>
                            </div>
                        </div>
                        @endif
                    </ul>
                </form>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @include('sweet::alert')
</body>

@yield('other-scripts', '')

</html>