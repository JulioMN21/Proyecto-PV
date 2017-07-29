@extends('layouts.app') @section('content')

    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('img/error.jpg') }}" alt="">
                    <div class="intro-text">
                        <h1 class="name">Falta de Permisos </h1>
                        <hr class="star-light">
                        <span class="skills">No tiene permisos para Acceder a este Seccion "Contacte al Administrador Gracias"</span>
                            <p>
                                <a href="{{ route('home')}}">Volver</a>
                            </p>
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
                        Copyright &copy; Punto de venta web
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection