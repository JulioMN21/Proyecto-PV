<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Clientes</title>
  <link rel="stylesheet" href="{{asset("css/stylepdf.css")}}">
</head>
<body>

	   <header class="clearfix">
      <div id="logo">
          <img src="{{asset('img/favicon1.png')}}">
      </div>
    <div id="client" class="derecha">
          <div class="to">Punto de Venta</div>
          <h2 class="name">Ingeneria web</h2>
          <div class="address"><strong> Control de clientes</strong> </div>
        </div>
      </div>
    </header>
  <article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE CLIENTES GENERAL<b></article>
  <hr><br> 
  <section>
    <div class="container">
      <table border="0" cellspacing="0" cellpadding="0"> 
        <thead>
          <tr>
            <th class="qty">#</th>
            <th class="desc">Nombre</th>
            <th class="desc">Fecha Nacimiento</th>
            <th class="desc">Telefono</th>
            <th class="desc">Estado</th>
          </tr>
        </thead>
        <tbody>
         	@foreach($clientesA as $a)
			<tr>
				<td class="qty">{{$a->id}}</td>
        <td class="desc">{{$a->vc_nombre}} {{$a->vc_apellidoP}} {{$a->vc_apellidoM}}</td>
        <td class="desc">{{$a->d_fecha_nacimiento}}</td>
        <td class="desc">{{$a->vc_telefono}}</td>
         @if(($a->status) == 1)
             <td class="desc" style="color:green">Activo</td>
             @else
             <td class="desc" style="color: red">Inactivo</td>
             @endif
			</tr>
        </tbody>
		      @endforeach
      </table>
    </div>
  </section>
    <footer>
      Sistema Punto De Venta
    </footer>
  </body>
</html>

