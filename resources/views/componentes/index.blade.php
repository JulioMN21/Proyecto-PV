@extends('layouts.app3') @section('content')
<div class="card card-block">
 <script src="{{ asset("js/pventa.js") }}"></script>
<section class="contenedor">

  <div class="row">
    <article class="col-8">
      <div class="card card-block" style="margin-top:1%; margin-left:1%; border:1px solid;">
        <form class="form-inline" action="" method="POST">
          <!-- <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <label class="col-lg-4" for="codigo">
            <strong> Codigo de producto:</strong>
           </label>
          <input type="text" name="" class="col-lg-5 form-control" value="">
          <button type="button" class="btn btn-success col-lg-2 " name="button" style="margin-left:15px;">Agregar</button> -->



          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="idUsuario" name="idUsuario" value="{{ Auth::user()->id }}">
            <label class="col-lg-4" for="codigo">
              <strong> Codigo de producto:</strong>
            </label>
            <input class="col-lg-5 form-control"
                type="text" 
                id="txtCodigo" 
                name=""
                value="">
            <button class="btn btn-success col-lg-2 "
                type="button"
                name="button" 
                onClick="agregar('{{ URL::to('/') }}/getproducto/codigo/')" 
                style="margin-left:15px;">
              Agregar
            </button>
        </form>
      </div>

      <div class="card card-block" style="margin-top:1%; margin-left:1%">
        <article class="table-responsive tableMargin">
          <table class="table table-hover table-sm" id="tblPedido">
            <thead>
              <tr class="btn-primary disabled">
                <th>Codigo de barras</th>
                <th>Descripción del producto</th>
                <th>Precio venta</th>
                <th>Cantidad</th>
                <th>Importe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </article>
      </div>
    </article>
    <div class="row">
      <div class="col-sm-12">
        <section style="margin-top:2%;">
          <label class="col-md-3 control-label" for="clientes"><strong>Cliente:</strong></label>
          <article>
            <select name="clientes" id="clientes" class="form-control" required>
              
          <option value=""  selected >Seleccione un Cliente </option>
        @foreach($clientes as $c)
            @if(($c->status)==1)
        <option value="{{ $c->id }}" style="font-size:20px; ">  {{$c->vc_nombre}} </option>
        @endif
        @endforeach
          </select>
          </article>
 
        </section>
      </div>
      <div class="center" style="margin-top:10%;">
        <section class>
          <label class=" control-label" for="clientes"><strong><H2>TOTAL</H2></label>
          <p id="lblTotal" style="font-size:60px;color:red;">$0.00</p>
        </section>
        <article>
          <div style="margin-top:10%;">
            <h3 class="card-title"><strong>OPCIONES</strong></h3>
            <div class="card-group">
              <div class="card">
                <div class="card-block">
                  <button class="btn btn-outline-success"
                      type="button" 
                      id="btnFinalizar" 
                      name="btnFinalizar" 
                      onClick="realizarVenta('{{ URL::to('/') }}/agregarventa')">
                    Finalizar venta
                  </button>  

                 <a class="btn btn-primary btn-md" href="{{url('/componentes/productos/productosUserPDF')}}" target="'_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Reporte General</a>
                </div>
              </div>
            </div>
          </div>
        </article>
        </div>
      </div>
    </div>
</section>
</div>

@yield('other-scripts', '')
@endsection


 
