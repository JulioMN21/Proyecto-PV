<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de Clientes</title>
    <link rel="stylesheet" href="{{asset("css/pdfDetallado.css")}}">
</head>
<body>
  <article class="center" style="font-size: 20px; text-align: center"> <b>REPORTE DE CLIENTES GENERAL<b></article>
  <hr><br> 
  <section>
    <div class="container">

<table class="trwd_auto fontsize"> 
  <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody>
            @foreach($clases as $a)
               
            <tr>
             @if(($a->status) == 1 )
                <td>{{$a->id}}</td>
                <td>{{$a->vc_nombre}}</td>
                 @endif
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