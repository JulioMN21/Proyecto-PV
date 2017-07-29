@extends('layouts.app')
 
@section('content')
<style>
	.margenSection{
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
		<h3><strong  class="text-uppercase">MODIFICAR PRODUCTO <p style="color:white">{{$producto->vc_nombre}}</p></strong></h3>
	</div>
<div class="card-block" style="background-color: #E1E1E1;">
<section class="contenedor">
<form action="{{url('/actualizarProducto')}}/{{$producto->id}}" method="POST" class="container">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<section class="clearfix row" style="margin-top:2%">
				<label class="col-form-label col-sm-4" for="nombre">
				<i class="fa fa-user" aria-hidden="true"></i><strong> Nombre:</strong>
			</label>
				<article class="col-sm-8">
					<input name="nombre" class="form-control" type="text" placeholder="Teclea nombre" autofocus tabindex="1" value="{{$producto->vc_nombre}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="codigo">
					<i class="fa fa-barcode" aria-hidden="true"></i><strong> Codigo de Barras:</strong></label>
				<article class="col-sm-8">
					<input name="codigo" type="text" placeholder="Teclea el codigo de barra" class="form-control" value="{{$producto->vc_codigo}}" onkeypress="return valida(event)">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="descripcion">
				<i class="fa fa-keyboard-o" aria-hidden="true"></i><strong> Descripcion:</strong></label>
				<article class="col-sm-8">
					<input name="descripcion" type="text" placeholder="Teclea su Descripcion" class="form-control" value="{{$producto->vc_descripcion}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="descripcion_corta">
				<i class="fa fa-keyboard-o" aria-hidden="true"></i><strong> Descripcion corta:</strong></label>
				<article class="col-sm-8">
					<input name="descripcion_corta" type="text" placeholder="Teclea Descripcion corta" class="form-control" value="{{$producto->vc_descripcion_corta}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="costo">
				<i class="fa fa-money" aria-hidden="true"></i><strong> Costo:</strong></label>
				<article class="col-sm-8">
					<input name="costo" type="text" placeholder="Teclea el Costo" class="form-control" value="{{$producto->costo}}" onkeypress="return valida(event)">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="precio_mayoreo">
				<i class="fa fa-money" aria-hidden="true"></i><strong> Precio Mayoreo:</strong></label>
				<article class="col-sm-8">
					<input name="precio_mayoreo" type="text" placeholder="Teclea el Precio de Mayoreo" class="form-control" value="{{$producto->precio_mayoreo}}" onkeypress="return valida(event)">
				</article>
			</section>

			


			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="venta">
				<i class="fa fa-money" aria-hidden="true"></i><strong> Precio De Venta:</strong></label>
				<article class="col-sm-8">
					<input name="venta" type="text" placeholder="Teclea el Precio de Venta" class="form-control" value="{{$producto->venta}}" onkeypress="return valida(event)">
				</article>
			</section>

		
			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="existencia">
				<i class="fa fa-list-ol" aria-hidden="true"></i></i><strong> Existencia Actual:</strong></label>
				<article class="col-sm-8">
					<input name="existencia" type="number" placeholder="Teclea  Existencia actual" class="form-control" value="{{$producto->i_existencia}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="existencia_min">
				<i class="fa fa-list-ol" aria-hidden="true"></i></i><strong> Existencia Minima:</strong></label>
				<article class="col-sm-8">
					<input name="existencia_min" type="number" placeholder="Teclea  Existencia actual" class="form-control" value="{{$producto->i_existencia_min}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="existencia_max">
				<i class="fa fa-list-ol" aria-hidden="true"></i><strong> Existencia Maxima:</strong></label>
				<article class="col-sm-8">
					<input name="existencia_max" type="number" placeholder="Teclea  Existencia maxima" class="form-control" value="{{$producto->i_existencia_max}}">
				</article>
			</section>

			<section class="clearfix row margenSection">
				<label class="col-form-label col-sm-4" for="familia">
				<i class="fa fa-users" aria-hidden="true"></i><strong> Familia:</strong></label>
				<article class="col-sm-8">
					<select name="familia" class="form-control" >

				@foreach($familiasP as $f)
					@if(($f->status) == 1)
							@if( ($producto->id_familia) === ($f->id))
								<option value="{{$producto->id_familia}}" selected> {{$f->vc_nombre}}</option>	
							@endif
						<option value="{{$f->id}}">{{$f->vc_nombre}}</option>
					@endif
					@endforeach
					</select>
				</article>
			</section>


			<section class="form-group margenSection">
				<div class="center">
					<button type="submit" class="btn btn-success">Actualizar</button>
					<a href="{{url('/componentes/productos/consultar')}}" class="btn btn-danger">Cancelar</a>
				</div>

			</section>
</form>
	</section>
 </div>
</div>


@stop












	
		