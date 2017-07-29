@extends('layouts.app')

@section('content')
<style>
	.margenSection{
    margin-top: 1%;
}
</style>

<div class="card" style="margin-top:0px; background-color: #54A3D9">
<div class="center">
  <h3><strong  class="text-uppercase">EDITAR CAJA NO.<p style="color:white">{{$caja->id}} </p></strong></h3>
</div>

<div class="card-block" style="background-color: #E1E1E1;">
<section class="contenedor">
<form action="{{url('/actualizarCajas')}}/{{$caja->id}}" method="POST" class="container">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		
				<section class="clearfix row" style="margin-top:2%">
					<label class="col-form-label col-sm-4" for="nombre">
 								<i class="fa fa-hdd-o" aria-hidden="true"></i><strong> No. de Caja:</strong>
 							</label>
					<article class="col-sm-8">
						<input name="no" class="form-control" type="text" value="{{$caja->id}}" autofocus tabindex="1" required>
					</article>
				</section>
				<section class="clearfix row" style="margin-top:2%">
				<label class="col-form-label col-sm-4" for="nombre">
				<i class="fa fa-usd" aria-hidden="true"></i><strong> Monto Inicial:</strong>
				</label>
				<article class="col-sm-8">
					<input name="inicial" class="form-control" type="number" value="{{$caja->inicial}}" autofocus tabindex="1" required>
				</article>
				</section>
				<section class="clearfix row" style="margin-top:2%">
				<label class="col-form-label col-sm-4" for="nombre">
				<i class="fa fa-usd" aria-hidden="true"></i><strong> Monto final:</strong>
				</label>
				<article class="col-sm-8">
					<input name="final" class="form-control" type="number" value="{{$caja->cantidad}}" autofocus tabindex="1" required>
				</article>
				</section>


		<section class="form-group margenSection">
				<div class="center">
					<button type="submit" class="btn btn-success">Registrar</button>
					<a href="{{url('/componentes/cajas/consultar')}}" class="btn btn-danger">Cancelar</a>
				</div>

			</section>


	</form>
</section>
</div>
</div>


@endsection