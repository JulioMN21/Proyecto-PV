@extends('layouts.app') @section('content')
<div class="card card-block">
	<div class="titulo">
		<strong class="titulo">CONSULTA PRODUCTOS</strong>
		<hr style="border-top: 3px double black;">
	</div>
	<div>
		<section>


			<article class="izquierda inner-addon left-addon">
				<i class="fa fa-search" aria-hidden="true"></i>

				<input type="text" class="form-control" placeholder="Búsqueda...">
			</article>

			<!-- <div class="panel-body">
				<form action="{{ url('/componentes/productos/consultar') }}" method="get" class="navbar-form navbar-left pull-left">
				{{ csrf_field() }}
				<div class="form-group">
					<input type="text" name="s" class="form-control" placeholder="search" value=" {{ isset($s) ? $s:''}}">
					<button type="submit" class="btn btn-primary">Buscar</button>
				</div>		
				</form>	
			</div>
  -->




			<article class="derecha">
				<a type="button" class="btn btn-primary" href="{{url('/componentes/productos/registrar')}}">
						<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>
						<span class="btnNuevo" >Nuevo</span>
					</a>
	              <a type="button" class="btn btn-primary" href="{{url('/componentes/productos/productosPDF')}}">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						<span class="btnNuevo" >PDF</span>
					</a>

			</article>
		</section>
		<article class="table-responsive ">
			<table class="table table-hover table-sm table-info">
				<thead>
					<tr class="btn-primary disabled">
						<th>Codigo Barras</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Descripcion Corta</th>
						<th>Costo</th>
						<th>venta</th>
						<th>Precio Mayoreo</th>
						<th>Existencia</th>
						<th>Existencia Min</th>
						<th>Existencia Max</th>
						<th>Familia </th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $a)
					<tr>
						<td>{{$a->vc_codigo}}</td>
						<td>{{$a->vc_nombre}}</td>
						<td>{{$a->vc_descripcion}}</td>
						<td>{{$a->vc_descripcion_corta}}</td>
						<td>{{$a->costo}}</td>
						<td>{{$a->venta}}</td>
						<td>{{$a->precio_mayoreo}}</td>
						<td>{{$a->i_existencia}}</td>
						<td>{{$a->i_existencia_min}}</td>
						<td>{{$a->i_existencia_max}}</td>
						@foreach($familias as $f)
							@if( ($a->id_familia) === ($f->id))
								<td>{{$f->vc_nombre}}</td>
							@endif
						@endforeach
						
						<td>	
							<a href="{{url('/editarProducto')}}/{{$a->id}}" class="btn btn-success btn-sm" placement="top">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							</a>

							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$a->id}}">
						<i class="fa fa-trash" aria-hidden="true"></i>
					</button>
						</td>

						
					</tr>

					<div class="modal fade" id="modal{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: right"><span aria-hidden="true">&times;</span></button>								
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Producto {{$a->vc_nombre}}?</h4>
								</div>
								<div class="modal-body">
									¡No se podrá recuperar el registro!
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
									<a href="{{url('/eliminarProducto')}}/{{$a->id}}" class="btn btn-danger">Eliminar</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</tbody>
			</table>
			<div style="text-align: right;">
				<p><strong style="font-style: italic;"> {!! $productos->total() !!} productos en total  </strong> </p>
			</div>
			<div style="margin-left: 50%;font-size: 20px";>
				{!! $productos->render() !!}  
			</div>
   
			
		</article>
	</div>
</div>

@endsection