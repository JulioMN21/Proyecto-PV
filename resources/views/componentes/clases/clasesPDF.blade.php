<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Clases del Producto</title>

  <link rel="stylesheet" href="{{asset("css/stylepdf.css")}}">
</head>
<body>
	  <header class="clearfix">
      <div id="logo">
          <img src="{{asset('img/favicon.png')}}">
      </div>
		<div id="client" class="derecha">
          <div class="to">Punto de Venta</div>
          <h2 class="name">Ingeneria web</h2>
          <div class="address"><strong> Control de clases</strong> </div>
        </div>
      </div>
    </header>
	<article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE CLASES GENERAL<b></article>
	<hr><br>	

  <section>
    <div class="container">
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="qty">ID</th>
            <th class="desc">Nombre de la clase</th>
            <th class="desc">Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clases as $a)
          <tr>
            <td class="qty">{{$a->id}}</td>
            <td class="desc">{{$a->vc_nombre}}</td>
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

