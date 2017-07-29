@extends('layouts.app')

@section('content')
<div class="card card-block">
	<div class="titulo">
			<strong class="titulo">CONSULTA CLIENTES</strong>
				<hr style="border-top: 3px double black;">
	</div>


	<div>
		<section>
				<article  class="izquierda inner-addon left-addon">
					<i class="fa fa-search" aria-hidden="true"></i>
					<input type="text" class="form-control" placeholder="Búsqueda...">
				</article>
				<article class="derecha">
					<a type="button" class="btn btn-primary" href="{{url('/componentes/clientes/registrar')}}">
						<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>
						<span class="btnNuevo" >Nuevo</span>
					</a>
	              <a type="button" class="btn btn-primary" href="{{url('/componentes/clientes/clientesPDF')}}">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						<span class="btnNuevo" >PDF</span>
					</a>

				</article>
		</section>
			<article class="table-responsive ">
				<table class="table table-hover table-sm table-info">
					<thead>
						<tr class="btn-primary disabled">
							<th>Folio</th>
							<th>Nombre</th>
							<th>APP</th>
							<th>APM</th>
							<th>Fecha de nacimiento</th>
							<th>Telefono</th>
							<th>Email</th>
							<th>Direccion</th>
							<th>Municipio</th>
							<th>Estado</th>
							<th>Sexo</th>
							<th>Codigo Postal</th>
							
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $a)
							<tr>
								<td>{{$a->id}}</td>
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

								<td>
									<a href="{{url('/editarCliente')}}/{{$a->id}}" class="btn btn-success btn-sm" placement="top">
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
									<h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el cliente {{$a->vc_nombre}}?</h4>
								</div>
								<div class="modal-body">
									¡No se podrá recuperar el registro!
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
									<a href="{{url('/eliminarCliente')}}/{{$a->id}}" class="btn btn-danger">Eliminar</a>
								</div>
							</div>
						</div>
					</div>
						@endforeach
					</tbody>
				</table>
				<div style="text-align: right;">
				<p><strong style="font-style: italic;"> {!! $clientes->total() !!} clientes en total  </strong> </p>
			</div>
			<div style="margin-left: 50%;font-size: 20px";>
				{!! $clientes->render() !!}  
			</div>
   
			</article>
	</div>
</div>




@endsection
