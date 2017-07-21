@extends('layouts.app')

@section('content')

<h2>
	Consulta de Clientes
</h2>

<div class="col-xs-12">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Folio</th>
				<th>Nombre</th>
				<th>APP</th>
				<th>APM</th>
				<th>Edad</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Direccion</th>
				<th>Municipio</th>
				<th>Estado</th>
				<th>Sexo</th>
				<th>Codigo Postal</th>
				<th>Recomienda</th>
				<th>
					<!-- <a href="{{url('/registrarClientes')}}" class="btn btn-success btn-xs">Registrar</a> -->
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($clientes as $a)
			<tr>
				<td>{{$a->folio}}</td>
				<td>{{$a->vc_nombre}}</td>
				<td>{{$a->vc_apellidoP}}</td>
				<td>{{$a->vc_apellidoM}}</td>
				<td>{{$a->d_fecha_nacimiento}}</td>
				<td>{{$a->vc_telefono}}</td>
				<td>{{$a->vc_email}}</td>
				<td>{{$a->vc_direccion}}</td>
				<td>{{$a->vc_municipio}}</td>
				<td>{{$a->vc_estado}}</td>
				<td>
					@if($a->sexo==0)
					Femenino
					@else
					Masculino
					@endif
				</td>
				<td>{{$a->cod_postal}}</td>
				<td>{{$a->recomienda}}</td>
			</tr>
		@endforeach
	</table>
	<div class="text-center">
		{{$clientes->links()}}
	</div>
</div>

@endsection
