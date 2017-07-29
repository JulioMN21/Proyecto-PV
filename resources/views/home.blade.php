
@extends('layouts.app3') @section('content')
<div class=" card card-consulta">

    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <h1 class="name">Bienvenido {{ Auth::user()->name }}</h1>
                         <h1 class="name">Sistema web de punto de venta</h1>
                        <hr class="star-light">
                        <span class="skills"></span>
                    </div>
                     <div class="card-header form-group" style="background-color:#66D2FF;margin-left: 20%;margin-right: 20%;margin-top: 30px;">
                                   <strong>APERTURA DE CAJA</strong> 
                                </div>
                    <form style="margin-top: 30px;">

                        <div class="form-group row">
                          <label for="example-text-input" class="col-6 col-form-label"><strong>Clase:</strong>  </label>
                          <div class="col-4">
                             <select name="for clase" class="form-control" required>
                              <option value="" selected>Seleccione caja </option>
                              <option value="">Caja 1</option>
                            </select>
                        </div>
                                </div>
                            <div class="form-group row">
                              <label for="example-search-input" class="col-6 col-form-label"><strong> Dinero inicial:</strong> </label>
                              <div class="col-4">
                                <input type="number" class="form-control" placeholder="$0.00">
                              </div>
                            </div>
                         <a href="#" class="btn btn-primary">Registrar</a>
                    </form>
                      <div class="card-header form-group" style="background-color:#66D2FF;margin-left: 20%;margin-right: 20%;margin-top: 30px;">     
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
                        Copyright &copy; Punto de venta web
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
