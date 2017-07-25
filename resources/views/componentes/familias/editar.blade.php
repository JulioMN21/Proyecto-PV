@extends('layouts.app') @section('content')
<style>
	.margenSection {
		margin-top: 1%;
	}
</style>

<div class="card" style="margin-top:0px; background-color: #54A3D9">
	<div class="center">
		<h3><strong  class="text-uppercase">MODIFICAR FAMILIA <p style="color:white">{{$familia->vc_nombre}}</p></strong></h3>
	</div>
	<div class="card-block" style="background-color: #E1E1E1;">
		<section class="contenedor">
			<form action="{{url('/actualizarFamilia')}}/{{$familia->id}}" method="POST" class="container">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<section class="clearfix row" style="margin-top:2%">
					<label class="col-form-label col-sm-4" for="clase">
 								<i class="fa fa-tags" aria-hidden="true"></i><strong> Clase:</strong>
 							</label>
					<article class="col-sm-8">
						<select name="clase" class="form-control" >

						@foreach($claseM as $c)

						@if(($c->status) == 1)
								@if(($familia->id_clase) == ($c->id))
								<option value="{{$familia->id_clase}}" selected> {{$c->vc_nombre}}</option>
								@endif
								<option value="{{$c->id}}">{{$c->vc_nombre}}</option>	
						@endif
						@endforeach
						</select>
					</article>
				</section>


				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="nombre">
      				<i class="fa fa-users" aria-hidden="true"></i><strong> Nombre de la Familia:</strong></label>
					<article class="col-sm-8">
						<input name="nombre" type="text" class="form-control" value="{{$familia->vc_nombre}}" >
					</article>
				</section>


				<section class="form-group margenSection">
					<div class="center">
						<button type="submit" class="btn btn-success">Actualizar</button>
						<a href="{{url('/componentes/familias/consultar')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</section>
			</form>
		</section>
	</div>
</div>
@stop