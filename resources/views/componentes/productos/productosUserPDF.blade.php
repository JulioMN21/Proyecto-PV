<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Producto</title>

  <link rel="stylesheet" href="{{asset("css/stylepdf.css")}}">
</head>
<body>

  <article class="center" style="font-size: 20px; text-align: center"> <b>PRODUCTOS<b></article>
  <hr><br>  

  <section>
    <div class="container">
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="desc">Codigo</th>
            <th class="desc">Nombre</th>
            <th class="desc">Descripcion</th>
            <th class="desc">Venta</th>
          </tr>
        </thead>
        <tbody>
          @foreach($productoA as $a)
          @if(($a->status)==1)
          <tr>
          
            <td class="desc">{{$a->vc_codigo}}</td>
            <td class="desc">{{$a->vc_nombre}}</td>
            <td class="desc">{{$a->vc_descripcion}}</td>
            <td class="desc">{{$a->venta}}</td>
            
        </tbody>
        @endif
          @endforeach
      </table>
    </div>
  </section>
    <footer>
      Sistema Punto De Venta
    </footer>
  </body>
</html>
