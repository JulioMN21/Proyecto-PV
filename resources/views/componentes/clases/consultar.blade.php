@extends('layouts.app') @section('content')
<div class="card card-block">
	<div class="titulo">
		<strong class="titulo">CONSULTA CLASES</strong>
		<hr style="border-top: 3px double black;">
	</div>

	<div>
		<section>
			<article class="izquierda inner-addon left-addon">
				<i class="fa fa-search" aria-hidden="true"></i>
				<input type="text" class="form-control" placeholder="Búsqueda...">
			</article>
			<article class="derecha">
				<a type="button" class="btn btn-primary" href="{{url('/componentes/clases/registrar')}}">
						<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>
						<span class="btnNuevo" >Nuevo</span>
					</a>
			</article>
		</section>
		<article class="table-responsive ">
			<table class="table table-hover table-sm table-info">
				<thead>
					<tr class="btn-primary disabled">
						<th>ID</th>
						<th>Nombre</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clases as $a)
					<tr>	
						<td>{{$a->id}}</td>
						<td>{{$a->vc_nombre}}</td>
						<td>
							<a href="{{url('/editarClase')}}/{{$a->id}}" class="btn btn-success btn-sm" placement="top">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							</a>

							<button class="btn btn-danger btn-sm" placement="top" data-toggle="modal" data-target="#modal{{$a->id}}">
									<i class="fa fa-trash-o" aria-hidden="true"></i>
								</button>

						</td>
					</tr>	

					<div class="modal fade" id="modal{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: right"><span aria-hidden="true">&times;</span></button>
								
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">¿Deseas eliminar la clase {{$a->vc_nombre}}?</h4>
								</div>
								<div class="modal-body">
									¡No se podrá recuperar el registro!
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
									<a href="{{url('/eliminarClase')}}/{{$a->id}}" class="btn btn-danger">Eliminar</a>
								</div>
							</div>
						</div>
					</div>

					@endforeach
				</tbody>
			</table>
			<div style="text-align: right;">
				<p><strong style="font-style: italic;"> {!! $clases->total() !!} clases en total  </strong> </p>
			</div>
			<div style="margin-left: 50%;font-size: 20px";>
				{!! $clases->render() !!}  
			</div>
   
		</article>
	</div>
</div>
@endsection