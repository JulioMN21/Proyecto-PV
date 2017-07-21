<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Punto De Venta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
	<link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
	<link rel="stylesheet" href="{{asset("sweetalert/sweetalert.css")}}">
</head>
<style>	
body {
    overflow-x: hidden;
	background: #E6DBDB;
 }
/* Toggle Styles */
#menu-toggle{
	color: white;
	cursor: pointer;
	margin-top: 1px;
	margin-left: 10px;
}

.center{
	text-align: center;
}
#accordion{
	-ms-overflow-style: none;
	height: 100%;
	overflow-y: scroll;
	overflow: -moz-scrollbars-none;
	overflow: auto;
}

#accordion::-webkit-scrollbar { width: 0 !important; }

#anclarSidebar {
	background-color: #444;
	bottom: 0;
	border-top: 0.5px solid #808080; /*c6c6c6*/
	color: #eee;
	height: 33px;
	position: absolute;
	width: 100%;
}

#anclarSidebar:hover{ background: #6ab1d4; }

#btnAnclar{ font-size: 22px; }

#iconAnclar{
	/*bottom: 0px;
	position: absolute;
	right: 0px;*/
	margin-left: 87%;
	width: 25px;
}

#mySidenav { /*antes 'sidenav'*/
	/*background-color: #111 /// Black (Original) */
	background-color: #444; /* Black*/
	height: 100%; /* 100% Full-height */
	left: 0;
	overflow-x: hidden; /* Disable horizontal scroll */
	padding-top: 60px; /* Place content 60px from the top */
	position: fixed; /* Stay in place */
	top: 0;
	transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
	width: 0; /* 0 width - change this with JavaScript */
	z-index: 12; /* Stay on top */
}

.card {
	border-bottom: 0.5px solid #808080; /*c6c6c6*/
	border-left: none;
	border-right: none;
	border-top: none;
	margin-bottom: 0px;
}

.collapse a{
	background-color: #fff;
	color: #444;
	font-size: 20px;
	padding: 1px 8px 1px 32px;
	transition: 0.3s
}

.collapse a:hover { background-color: #f2f2f2; }

.hasAnclar{ padding-bottom: 33px; }

.head-collapse a {
	background-color: #444;
	color: #eee;
	display: block;
	font-size: 22px;
	padding: 1px 8px 1px 15px;
	transition: 0.3s
}

.head-collapse a:hover, .head-collapse a:focus {
	background: #6ab1d4;
	font-size: 1.35em;
}

.head-collapse a .icon {
	box-sizing: border-box;
	display: inline-block;
	margin-right: 5px;
	text-align: center;
	width: 25px;
}

.head-subcollapse a{
	background-color: #fff;
	color: #444;
	cursor: pointer;
	font-size: 20px;
	padding: 1px 8px 1px 32px;
	transition: 0.3s
}

.head-subcollapse a:hover{ background-color: #f2f2f2; }

.icon {
	text-align: center;
	width: 25px;
}

.sidenav{
	-ms-overflow-style: none;
	overflow: -moz-scrollbars-none;
}

.sidenav::-webkit-scrollbar { width: 0 !important; }

.sidenav a {
	/*color: #818181;*/
	display: block;
	font-size: 20px;
	text-decoration: none;
	transition: 0.3s
}

.sidenav .closebtn {
	font-size: 36px;
	margin-left: 50px;
	position: absolute;
	right: 25px;
	top: 0;
}

.subcollapse{
	background: rgba(240,240,245,1);
	padding-left: 62px;
	transition: height 1s;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

@media screen and (max-width: 767px) {
    /*.sidenav {top: 40px;}*/
    #mySidenav { top: 40px; }
}

#menu-toggle:hover{ background-color: #4181D0; }

#iconUser{ color: white; }


#wrapper { 
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #211F1F;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 0;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        width: 0;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
#nav{
	transition: margin-left .5s;
}

.contenedor{
	margin-top: 20px;
}

</style>
<body>
 <div id="app">
 		<section id = "wrapper" class = "toggled" >
        <div id="sidebar-wrapper">
			<div style=" border-style: solid; color: lightgray"  class="bg-primary" >
					<section class="center" id="style" >
						<span  style="color: white; font-size: 30px" ><strong >ITC</strong></span>
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
		    		<div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</div><span>Venta</span>
		    	</a>
			</article>
			<section id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="OneCard">

			</section>	
		</section>		

		<section class="card">
			<article role="tab" id="OneCardTwo" class="head-collapse">
		    	<a data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" container="body" placement="right" [ngbTooltip]="anclado ? tipProveedores : false">
		    		<div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i>
						</div><span>Administrador</span>
		    	</a>
			</article>
			<section id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="OneCardTwo">
				<a class="list-group-item list-group-item-action"  href="#">User</a>
				<a class="list-group-item list-group-item-action"  href="#">Clases</a>
				<a class="list-group-item list-group-item-action"  href="#">Familias</a>
				<a class="list-group-item list-group-item-action"  href="#">Productos</a>
				<a class="list-group-item list-group-item-action" href="#">Ventas</a>
				<a class="list-group-item list-group-item-action" href="#">Provedores</a>
				<a class="list-group-item list-group-item-action" href="#">Compras</a>

			</section>	
		</section>		
	
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
	
</body>
</html>






