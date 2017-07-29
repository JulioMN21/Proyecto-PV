@extends('layouts.app')

@section('content')
<div class="card card-block">
	<div class="titulo">
			<strong class="titulo">Consulta de Usuarios</strong>
				<hr style="border-top: 3px double black;">
	</div>


	<div>
		</section>
			<article class="table-responsive ">
				<table class="table table-hover table-sm table-info">
					<thead>
						<tr class="btn-primary disabled">
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $a)
							<tr>
							@if(($a->email) != 'admin@admin.com')
								<td>{{$a->id}}</td>
								<td>{{$a->name}}</td>
								<td>{{$a->email}}</td>	
								<td>
								
									<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$a->id}}">
									<i class="fa fa-trash" aria-hidden="true"></i>
									</button>

								</td>
							</tr>
							@endif

							<div class="modal fade" id="modal{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: right"><span aria-hidden="true">&times;</span></button>
								
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el cliente {{$a->name}}?</h4>
								</div>
								<div class="modal-body">
									¡No se podrá recuperar el registro!
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
									<a href="{{url('/eliminarUser')}}/{{$a->id}}" class="btn btn-danger">Eliminar</a>
								</div>
							</div>
						</div>
					</div>
						@endforeach
					</tbody>
				</table>
				<div style="text-align: right;">
				<p><strong style="font-style: italic;"> {!! $user->total() !!} usuarios en total  </strong> </p>
			</div>
			<div style="margin-left: 50%;font-size: 20px";>
				{!! $user->render() !!}  
			</div>
			</article>
	</div>
</div>


@endsection
