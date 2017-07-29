 @extends('layouts.app') @section('content')
<style>
	.margenSection {
		margin-top: 1%;
	}
</style>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<div class="card" style="margin-top:0px; background-color: #54A3D9">
	<div class="center">
		<h3><strong  class="text-uppercase">MODIFICAR CLIENTE <p style="color:white">{{$clientes->vc_nombre}}</p></strong></h3>
	</div>

	<div class="card-block" style="background-color: #E1E1E1;">
		<section class="contenedor">
			<form action="{{url('/actualizarCliente')}}/{{$clientes->id}}" method="POST" class="container">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<section class="clearfix row" style="margin-top:2%">
					<label class="col-form-label col-sm-4" for="nombre">
 								<i class="fa fa-user" aria-hidden="true"></i><strong> Nombre:</strong>
 							</label>
					<article class="col-sm-8">
						<input name="nombre" class="form-control" type="text" placeholder="Teclea nombre" autofocus tabindex="1" value="{{$clientes->vc_nombre}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="app">
      		<i class="fa fa-address-card" aria-hidden="true"></i><strong> Apellido paterno:</strong></label>
					<article class="col-sm-8">
						<input name="app" type="text" placeholder="Teclea apellido paterno" class="form-control" value="{{$clientes->vc_apellidoP}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="apm">
      		<i class="fa fa-address-card" aria-hidden="true"></i><strong> Apellido materno:</strong></label>
					<article class="col-sm-8">
						<input name="apm" type="text" placeholder="Teclea apellido materno" class="form-control" value="{{$clientes->vc_apellidoM}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="edad">
      		<i class="fa fa-calendar-o" aria-hidden="true"></i><strong> Fecha de nacimiento:</strong></label>
					<article class="col-sm-8">
						<input name="edad" type="text" placeholder="1994-08-17" class="form-control" value="{{$clientes->d_fecha_nacimiento}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="telefono">
      			<i class="fa fa-phone" aria-hidden="true"></i><strong> Telefono:</strong></label>
					<article class="col-sm-8">
						<input name="telefono" type="text" maxlength="11" placeholder="Teclea telefono" class="form-control" value="{{$clientes->vc_telefono}}" onkeypress="return valida(event)">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="correo">
      		<i class="fa fa-envelope" aria-hidden="true"></i><strong> Email:</strong></label>
					<article class="col-sm-8">
						<input name="correo" type="email" placeholder="Teclea e-mail" class="form-control" value="{{$clientes->vc_email}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="direccion">
      		<i class="fa fa-globe fa-fw" aria-hidden="true"></i><strong> Direccion:</strong></label>
					<article class="col-sm-8">
						<input name="direccion" type="text" placeholder="Teclea Direccion" class="form-control" value="{{$clientes->vc_direccion}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="municipio">
      		<i class="fa fa-globe fa-fw" aria-hidden="true"></i><strong> Municipio:</strong></label>
					<article class="col-sm-8">
						<input name="municipio" type="text" placeholder="Teclea Municipio" class="form-control" value="{{$clientes->vc_municipio}}">

					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="estado">
      		<i class="fa fa-globe fa-fw" aria-hidden="true"></i><strong> Estado:</strong></label>
					<article class="col-sm-8">
						<input name="estado" type="text" placeholder="Teclea Estado" class="form-control" value="{{$clientes->vc_estado}}">
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="sexo">
      		<i class="fa fa-mars-double" aria-hidden="true"></i><strong> Sexo:</strong></label>
					<article class="col-sm-8">
						<select name="sexo" class="form-control">
  				<option value="{{$clientes->sexo}}" selected>{{$clientes->sexo}}</option>
  				<option value="0">Femenino</option>
  				<option value="1">Masculino</option>
  			</select>
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="cod_postal">
      		<i class="fa fa-clipboard fa-fw" aria-hidden="true"></i><strong> Codigo Postal:</strong></label>
					<article class="col-sm-8">
						<input name="cod_postal" type="number" maxlength="5" minlength="5" placeholder="Teclea Codigo Postal" class="form-control" value="{{$clientes->cod_postal}}" onkeypress="return valida(event)">
					</article>
				</section>



				<section class="form-group margenSection">
					<div class="center">
						<button type="submit" class="btn btn-success">Actualizar</button>
						<a href="{{url('/componentes/clientes/consultar')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</section>

			</form>
	</div>
</div>

@stop