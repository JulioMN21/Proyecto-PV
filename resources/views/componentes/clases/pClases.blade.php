@extends('layouts.app')

@section('content')

<div class="container">
  <div class="jumbotron">
    <h1 class="display-3">MODULO CLASES</h1>
    <p class="lead"></p>
    <a type="submit"  class="btn btn-outline-primary my-1 my-sm-0"   href="{{url('/componentes/clases/consultar')}}">Consultar</a>
    <a type="submit"  class="btn btn-outline-primary my-1 my-sm-0"   href="{{url('/componentes/clases/registrar')}}">registrar</a>
  </div>

</div>

@endsection
