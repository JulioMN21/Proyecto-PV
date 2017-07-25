@extends('layouts.app')

@section('content')
<style>
	.margenSection {
		margin-top: 1%;
	}
</style>

<div class="card" style="margin-top:0px; background-color: #54A3D9">
<div class="center">
  <h3><strong>REGISTRAR FAMILIA</strong></h3>
</div>

<div class="card-block" style="background-color: #E1E1E1;">
<section class="contenedor">
<form action="{{url('/guardarFamilia')}}" method="POST" class="container">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

 	<section class="clearfix row" style="margin-top:2%">
					<label class="col-form-label col-sm-4" for="clase">
 								<i class="fa fa-tags" aria-hidden="true"></i><strong> Clase:</strong>
 							</label>
					<article class="col-sm-8">
						 <select name="clase" class="form-control" required>
						    <option value="" selected>Ninguno </option>
						    @foreach($clase as $c)
						    @if(($c->status) == 1)
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
      			<input name="nombre" type="text" class="form-control" placeholder="Teclea la Familia" required>	</article>
				</section>


    <section class="form-group margenSection">
					<div class="center">
						<button type="submit" class="btn btn-success">Registrar</button>
						<a href="{{url('/componentes/familias/consultar')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</section>
  </form>
</section>
</div>
</div>
@endsection
