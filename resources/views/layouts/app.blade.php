<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Punto De Venta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
	<link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
	<link rel="stylesheet" href="{{asset("sweetalert/sweetalert.css")}}">
	<link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
 <div id="app">
 		<section id = "wrapper" class = "toggled">
        <div id="sidebar-wrapper">
			<div style=" border-style: solid; color: lightgray" class="bg-primary">
					<section class="center" id="style">
						<span style="color: white; font-size: 30px"><strong>
<img  src="{{ asset('/img/santillos.png') }}" width="50" height="50" class="d-inline-block align-top" alt="">
							SANTILLOS</strong></span>
					</section>
					<section class="center" >
						<span style="color: white; font-size: 20px">Punto De Venta</span>
					</section>
			</div> 
		<section class="card">
			<article role="tab" id="1" class="head-collapse">
		    	<a data-toggle="collapse" data-parent="#accordion"  href="#collapseOnee" aria-expanded="false" aria-controls="collapseTwo" container="body" placement="right" [ngbTooltip]="anclado ? tipProveedores : false">
		    		<div class="icon"><i class="fa fa-user" aria-hidden="true" ></i>
						</div><span>Perfil</span>
		    	</a>
			</article>
			<section id="collapseOnee" class="collapse" role="tabpanel" aria-labelledby="1">
            <a class="list-group-item list-group-item-action" href="{{url('/home')}}">Principal</a>
			</section>	
		</section>	


		<section class="card">
			<article role="tab" id="OneCard" class="head-collapse">
		    	<a data-toggle="collapse" data-parent="#accordion"  href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo" container="body" placement="right" [ngbTooltip]="anclado ? tipProveedores : false">
		    		<div class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div><span>$$Venta</span>
		    	</a>
			</article>
			<section id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="OneCard">
			<a class="list-group-item list-group-item-action" href="{{url('/componentes')}}">Nueva Venta</a>
			</section>	
		</section>		
 		 	@if ((Auth()->user()->role_id == 1)) 
		<section class="card">
			<article role="tab" id="OneCardTwo" class="head-collapse">
		    	<a data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" container="body" placement="right" [ngbTooltip]="anclado ? tipProveedores : false">
		    		<div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i>
						</div><span>Administrador</span>
		    	</a>
			</article>
			<section id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="OneCardTwo">
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/user/consultar')}}">User</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/clientes/consultar')}}">Clientes</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/proveedores/consultar')}}">Proveedores</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/clases/consultar')}}">Clases</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/familias/consultar')}}">Familias</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/productos/consultar')}}">Productos</a>
				<a class="list-group-item list-group-item-action" href="{{url('/componentes/ventas/consultar')}}">Ventas</a>

			</section>	
		</section>		
			@endif
		<section class="card">
			<article role="tab" id="OneCardTree" class="head-collapse">
		    	<a data-toggle="collapse" data-parent="#accordion"  href="#collapseTree" aria-expanded="false" aria-controls="collapseTwo" container="body" placement="right" [ngbTooltip]="anclado ? tipProveedores : false">
		    		<div class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i>
						</div><span>INFORMACIÓN</span>
		    	</a>
			</article>
			<section id="collapseTree" class="collapse" role="tabpanel" aria-labelledby="OneCardTree">
				<a class="list-group-item list-group-item-action" href="#">Integrantes</a>
			</section>	
		</section>				
        </div>

	<div>
		<div>
	<nav class="navbar navbar-fixed-top  bg-primary" style="width: 100%;"> 
		<span onclick="openNav()" class="pull-left" id="barrasMenuBox">
		<i  href="#menu-toggle" id="menu-toggle" class="fa fa-bars fa-2x" aria-hidden="true"></i>	
	


               
                <form class="pull-right">
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
                    	</span>
	</nav>

		</div>
		@yield('content')
	</div>

	<script src="{{asset("sweetalert/sweetalert.min.js")}}"></script>
	 @include('sweet::alert')
	<script src="{{asset("js/jquery-3.1.1.js")}}"></script>
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
	<script src="{{asset("js/funcionalidad.js")}}"></script>
    <script src="{{asset('js/pventa.js') }}"></script>
</body>

</html>












