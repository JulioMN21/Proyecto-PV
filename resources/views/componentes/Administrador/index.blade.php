
@extends('layouts.app') @section('content')
<div class=" card card-block">
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('img/img2.png') }}" alt="">
                    <div class="intro-text">
                        <h1 class="center">Pantalla Pricipal de Administrador</h1>
                           <h1 class="center">Sistema web de punto de venta.</h1>
                        <hr class="star-light">
                        <span class="skills">Información De los representantes, y la Insitición</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Materias</h3>
                        <p>Proyecto Integrador
                            <br>Ingenieria Web</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Integrantes</h3>
                        <ul class="list-inline">
                          <li>Joel Francisco Castañeda Dominguez</li>
                        </ul>
                        <ul class="list-inline">
                          <li>Morales Nava Julio</li>
                        </ul>
                        <ul class="list-inline">
                          <li>Martinez Ricardo</li>
                        </ul>
                        <ul class="list-inline">
                          <li>Roman Ayala Antonio</li>
                        </ul>               
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Universidad</h3>
                        <a href="https://itculiacan.edu.mx/">Instituto Tecnologico de Culiacan</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>  <h4>Copyright &copy; Punto de venta web </h4> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection