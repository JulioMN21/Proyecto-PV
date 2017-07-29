<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Listado de Familias</title>
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
          <div class="address"><strong> Control de familias</strong> </div>
        </div>
      </div>
    </header>
  <article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE FAMILIAS GENERAL<b></article>
  <hr><br> 
  <section>
    <div class="container">
      <table border="0" cellspacing="0" cellpadding="0"> 
        <thead>
          <tr>
            <th class="qty">#</th>
            <th class="desc">Clase perteneciente</th>
            <th class="desc">Nombre de la familia</th>
            <th class="desc">Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($familias as $a)
      <tr>
        <td class="qty">{{$a->id}}</td>

        @foreach($clases as $c)
            @if(($a->id_clase) == ($c->id))
              <td class="desc">{{$c->vc_nombre}}</td>
            @endif
        @endforeach

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



      <!-- <table>
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="no c">Clase</th>
            <th class="desc">Nombre</th>
          </tr>
        </thead>
        <tbody>
         	@foreach($familias as $a)
			<tr>
				<td class="no">{{$a->id}}</td>
        <td class="no c">{{$a->id_clase}}</td>>
				<td class="desc">{{$a->vc_nombre}}</td>
			</tr>
        </tbody>
		      @endforeach
      </table> -->
