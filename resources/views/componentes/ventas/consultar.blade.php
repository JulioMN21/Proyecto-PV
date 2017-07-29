@extends('layouts.app') @section('content')
<div class=" card card-block">
	<div class="titulo">
		<strong class="titulo">CONSULTA DE VENTAS</strong>
		<hr style="border-top: 3px double black;">
	</div>

	<div>
		<section>
			<article class="izquierda inner-addon left-addon">
				<i class="fa fa-search" aria-hidden="true"></i>
				<input type="text" class="form-control" placeholder="Búsqueda...">
			</article>
			<article class="derecha">
				<a type="button" class="btn btn-primary" href="{{url('/componentes/')}}">
						<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>
						<span class="btnNuevo" >Nuevo</span>
					</a>
			</article>
		</section>
		<article class="table-responsive ">
			<table class="table table-hover table-sm table-info">
				<thead>
					<tr class="btn-primary disabled">
						<th>#</th>
						<th>Cliente</th>
						<th>Caja</th>
						<th>Fecha</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ventas as $a)
					<tr>	
						<td>{{$a->id}}</td>
						@foreach($clientes as $c)
						@if( ($a->cliente) === ($c->id))
						<td>{{$c->vc_apellidoP}} {{$c->vc_nombre}} </td>
						@endif
						@endforeach
						<td>{{$a->caja}}</td>
						<td>{{$a->created_at}}</td>
						<td>
							<a href="{{url('/consultarDetalles')}}/{{$a->id}}" class="btn btn-info btn-sm" placement="top">
							<i class="fa fa-eye" aria-hidden="true"></i>
							</a>

				

						</td>
					</tr>	

				

					@endforeach
				</tbody>
			</table>
		</article>
	</div>
</div>
@endsection