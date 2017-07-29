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
		<h3><strong>REGISTRAR PROVEEDOR</strong></h3>
	</div>

	<div class="card-block" style="background-color: #E1E1E1;">
		<section class="contenedor">
			<form action="{{url('/guardarProveedor')}}" method="POST" class="container">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<section class="clearfix row" style="margin-top:2%">
					<label class="col-form-label col-sm-4" for="nombre">
 								<i class="fa fa-user" aria-hidden="true"></i><strong> Nombre:</strong>
 							</label>
					<article class="col-sm-8">
						<input name="nombre" class="form-control" type="text" placeholder="Teclea nombre" autofocus tabindex="1" required>
					</article>
				</section>


				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="telefono">
      		<i class="fa fa-phone" aria-hidden="true"></i><strong> Telefono:</strong></label>
					<article class="col-sm-8">
						<input name="telefono" maxlength="11" type="text" placeholder="Teclea telefono" class="form-control" required  tabindex="2" onkeypress="return valida(event)">
					</article>
				</section>


				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="celular">
      		<i class="fa fa-phone" aria-hidden="true"></i><strong> Celular:</strong></label>
					<article class="col-sm-8">
						<input name="celular" maxlength="11" type="text" placeholder="Teclee su celular" class="form-control" required  tabindex="3" onkeypress="return valida(event)">
					</article>
				</section>
				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="email">
      		<i class="fa fa-envelope" aria-hidden="true"></i><strong> Email:</strong></label>
					<article class="col-sm-8">
						<input name="email" type="email" placeholder="Teclea e-mail" class="form-control" required  tabindex="4" >
					</article>
				</section>

			<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="cod_postal">
      		<i class="fa fa-clipboard fa-fw" aria-hidden="true"></i><strong> Codigo Postal:</strong></label>
					<article class="col-sm-8">
					<input name="cod_postal" maxlength="5" minlength="5" type="text" placeholder="Teclea Codigo Postal" class="form-control" required  tabindex="11" onkeypress="return valida(event)">
					</article>
				</section>


				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="estado">
      		<i class="fa fa-globe fa-fw" aria-hidden="true"></i><strong> Estado:</strong></label>
					<article class="col-sm-8">
						<input name="estado" type="text" placeholder="Teclea Estado" class="form-control" required  tabindex="7" >
					</article>
				</section>



				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="direccion">
      		<i class="fa fa-globe fa-fw" aria-hidden="true"></i><strong> Direccion:</strong></label>
					<article class="col-sm-8">
						<input name="direccion" type="text" placeholder="Teclea Direccion" class="form-control" required  tabindex="5" >
					</article>
				</section>




								<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="RFC">
      		<i class="fa fa-clipboard fa-fw" aria-hidden="true"></i><strong> RFC:</strong></label>
					<article class="col-sm-8">
						<input name="RFC" type="text" placeholder="Teclea RFC" class="form-control" required  tabindex="6" >
					</article>
				</section>

				<section class="clearfix row margenSection">
					<label class="col-form-label col-sm-4" for="sexo">
      		<i class="fa fa-mars-double" aria-hidden="true"></i><strong> Tipo:</strong></label>
					<article class="col-sm-8">
						<select name="tipo" class="form-control" required  tabindex="8" >
  				<option value="" selected>Seleccione el Tipo</option>
  				<option value="0">Servicio</option>
  				<option value="1">Productos</option>
  				<option value="2">Ambos</option>
  			</select>
					</article>
				</section>

	
					</article>
				</section>
				<section class="form-group margenSection">
					<div class="center">
						<button type="submit" class="btn btn-success">Registrar</button>
						<a href="{{url('/componentes/proveedores/consultar')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</section>

			</form>
	</div>
</div>

@endsection