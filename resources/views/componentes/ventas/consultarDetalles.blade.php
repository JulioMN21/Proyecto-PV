@extends('layouts.app') @section('content')
<div class="card-consulta">
	<div class="titulo">
		<strong class="titulo">DETALLES DE VENTAS</strong>
		<hr style="border-top: 3px double black;">
	</div>

	<div>
		<section>
			<article class="izquierda inner-addon left-addon">
				<i class="fa fa-search" aria-hidden="true"></i>
				<input type="text" class="form-control" placeholder="Búsqueda...">
			</article>
			<article class="derecha">
				<a type="button" class="btn btn-primary" href="{{url('/componentes/cajas/registrar')}}">
						<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>
						<span class="btnNuevo" >Nuevo</span>
					</a>
			</article>
		</section>
		<article class="table-responsive ">
			<table class="table table-hover table-sm table-info">
				<thead>
					<tr class="btn-primary disabled">
						<th>No.Venta</th>
						<th>Caja</th>
						<th>Cliente</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Total</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>
					@foreach($detalle as $a)
					<tr>	
						<td>{{$a->id}}</td>
						<td>{{$a->caja}}</td>
						@foreach($clientes as $c)
						@if( ($a->cliente) === ($c->id))
						<td>{{$c->vc_apellidoP}} {{$c->vc_nombre}} </td>
						@endif
						@endforeach
						@foreach($productos as $f)
							@if( ($a->producto) === ($f->id))
								<td>{{$f->vc_nombre}}</td>
							@endif
						@endforeach
						<td>{{$a->cantidad}}</td>
						<td>{{$a->total}}</td>
						<td>{{$a->fecha}}</td>
					</tr>	

					@endforeach
				</tbody>
			</table>
		</article>
	</div>
</div>
@endsection