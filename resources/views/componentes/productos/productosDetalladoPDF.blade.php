<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="{{asset("css/pdfDetallado.css")}}">
</head>
<body>
  <article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE PRODUCTO DETALLADO<b></article>
  <hr><br> 
  <section>
    <div class="container">

<table class="trwd_auto fontsize"> 
  <thead>
          <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Descripcion corta</th>
            <th>Costo</th>
            <th>Venta</th>
            <th>Precio Mayoreo</th>
            <th>Existencia</th>
            <th>Existencia minima</th>
            <th>Existencia maxima</th>
            <th>Familia</th>
          </tr>
        </thead>
        <tbody>
            @foreach($productoA as $a)
            <tr>
          
                <td>{{$a->id}}</td>
                <td>{{$a->vc_codigo}}</td>
                <td>{{$a->vc_nombre}}</td>
                <td>{{$a->vc_descripcion}}</td>
                <td>{{$a->vc_descripcion_corta}}</td>
                <td>{{$a->costo}}</td>
                <td>{{$a->venta}}</td>
                <td>{{$a->precio_mayoreo}}</td>
                <td>{{$a->i_existencia}}</td>
                <td>{{$a->i_existencia_min}}</td>
                <td>{{$a->i_existencia_max}}</td>
                <td>{{$a->id_familia}}</td>
               
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