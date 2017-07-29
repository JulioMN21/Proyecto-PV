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
            <th>APP</th>
            <th>APM</th>
            <th>Sexo</th>
            <th>Fecha Nacimiento</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Municipio</th>
            <th>Estado</th>
            <th>Codigo Postal</th>
            <th>Recomienda</th>
          </tr>
        </thead>
        <tbody>
            @foreach($clientesA as $a)
               
            <tr>
             @if(($a->status) == 1 )
                <td>{{$a->id}}</td>
                <td>{{$a->vc_nombre}}</td>
                <td>{{$a->vc_apellidoP}}</td>
                <td>{{$a->vc_apellidoM}}</td>
                <td>
                  @if($a->sexo==0)
                  Femenino
                  @else
                  Masculino
                  @endif
                </td>
                <td>{{$a->d_fecha_nacimiento}}</td>
                <td>{{$a->vc_telefono}}</td>
                <td>{{$a->vc_email}}</td>
                <td>{{$a->vc_direccion}}</td>
                <td>{{$a->vc_municipio}}</td>
                <td>{{$a->vc_estado}}</td>
                 <td>{{$a->cod_postal}}</td>

                <td>
                   @if(($a->recomienda) == '') 
                    Nadie
                  @endif

                  @foreach($clientesA as $c)
                   @if(($a->recomienda) === ($c->id)) 
                    {{$c->vc_nombre}}
                  @endif
                  
                   @endforeach
              


                </td>
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