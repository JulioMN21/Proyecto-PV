@extends('layouts.app')
 
@section('content')
<style>
	.margenSection{
    margin-top: 1%;
}
</style>

<div class="card" style="margin-top:0px; background-color: #54A3D9">
<div class="center">
  <h3><strong class="text-uppercase">MODIFICAR CLASE  <p style="color:white">{{$clase->vc_nombre}}<p></strong></h3>
</div>

<div class="card-block" style="background-color: #E1E1E1;">
<section class="contenedor">
	<form action="{{url('/actualizarClase')}}/{{$clase->id}}" method="POST" class="container">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<section class="clearfix row" style="margin-top:2%">
				<label class="col-form-label col-sm-4" for="nombre">
				<i class="fa fa-tags" aria-hidden="true"></i><strong> Nombre:</strong>
			</label>
				<article class="col-sm-8">
					<input name="nombre" class="form-control" type="text"  autofocus tabindex="1" value="{{$clase->vc_nombre}}" >
				</article>
			</section>
					<section class="form-group margenSection">
				<div class="center">
					<button type="submit" class="btn btn-success">Actualizar</button>
					<a href="{{url('/componentes/clases/consultar')}}" class="btn btn-danger">Cancelar</a>
				</div>
			</section>

	</form>
		</section>
</div>
</div>

@stop
