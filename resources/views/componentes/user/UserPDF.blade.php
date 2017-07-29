<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Listado de usuarios</title>
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
          <div class="address"><strong> Control de productos</strong> </div>
        </div>
      </div>
    </header>
  <article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE USUARIOS GENERAL<b></article>
  <hr><br>  

  <section>
    <div class="container">
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="qty">#</th>
            <th class="desc">Nombre</th>
            <th class="desc">Email</th>
            <th class="desc">Fecha de creación</th>
          </tr>
        </thead>
        <tbody>
          @foreach($user as $a)
          <tr>
            <td class="qty">{{$a->id}}</td>
            <td class="desc">{{$a->name}}</td>
            <td class="desc">{{$a->email}}</td>
            <td class="desc">{{$a->created_at}}</td>
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