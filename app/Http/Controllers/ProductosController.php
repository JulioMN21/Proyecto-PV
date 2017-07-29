<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Familia;
use DB;
use Alert;
class ProductosController extends Controller
{

  public function index()
  {
        return view('componentes.productos.pProductos');
  }

  public function registrarProductos(){
     $familias=Familia::all();
  return view('componentes.productos.registrar', compact('familias'));
}

public function guardarProducto (Request $datos){

  $productos= new Producto();

    $productos->vc_codigo=$datos->input('codigo');
    $productos->vc_nombre=$datos->input('nombre');
    $productos->vc_descripcion=$datos->input('descripcion');
    $productos->vc_descripcion_corta=$datos->input('descripcion_corta');
    $productos->costo=$datos->input('costo');
    $productos->venta=$datos->input('venta');
    $productos->precio_mayoreo=$datos->input('precio_mayoreo');
    $productos->i_existencia=$datos->input('existencia');
    $productos->i_existencia_min=$datos->input('existencia_min');
    $productos->i_existencia_max=$datos->input('existencia_max');
    $productos->id_familia=$datos->input('familia');
    $productos->usuCreador=Auth()->User()->id;
    $productos->save();

    alert()->success('El producto se a registrado correctamente', 'EXITO');
  return Redirect('/componentes/productos/consultar');
}

public function consultarProductos(Request $request) {
    // $s = $request->input('s');
    // $productos=DB::table('productos')
    $productos=DB::table('productos')

        ->select('productos.*')
        ->where('status', '<>', 0)
        // ->Search($s)
        ->paginate(5);
        $familias=Familia::all();
    return view('componentes.productos.consultar', compact('productos','familias'));
}

     public function getProducto($id) {
        $producto = Producto::find($id);
        return $producto;
    }

    public function getProductoCodigo($codigo) {
        $producto = DB::table('productos')
            ->where('vc_codigo', $codigo)->get();

        return $producto;
    }

public function eliminarProducto($id) {
        $producto=Producto::find($id);
        $producto->status=0;
        $producto->save();
        // $producto->delete();
       Alert::basic('El producto seleccionado ah sido eliminado correctamente', 'Exito');
        return Redirect('/componentes/productos/consultar');
    }

    public function editarProducto($id){
        $producto=Producto::find($id);
        $familiasP=Familia::all();
        return view('componentes.productos.editar', compact('producto','familiasP'));
    }

    public function actualizarProducto(Request $datos, $id){
        $productos=Producto::find($id);
        $productos->vc_codigo=$datos->input('codigo');
        $productos->vc_nombre=$datos->input('nombre');
        $productos->vc_descripcion=$datos->input('descripcion');
        $productos->vc_descripcion_corta=$datos->input('descripcion_corta');
        $productos->costo=$datos->input('costo');
        $productos->venta=$datos->input('venta');
        $productos->precio_mayoreo=$datos->input('precio_mayoreo');
        $productos->i_existencia=$datos->input('existencia');
        $productos->i_existencia_min=$datos->input('existencia_min');
        $productos->i_existencia_max=$datos->input('existencia_max');
        $productos->id_familia=$datos->input('familia');
        $productos->usuModificador=Auth()->User()->id;
        $productos->save();
        alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/productos/consultar');
    }

    public function productosPDF(){
        $productoA=Producto::all();
        $familias=Familia::all();
        $vista=view('componentes.productos.productosPDF', compact('productoA','familias'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }

     public function productosDetalladoPDF(){
        $productoA=Producto::all();
        $familias=Familia::all();
        $vista=view('componentes.productos.productosDetalladoPDF', compact('productoA','familias'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }
     public function productosUserPDF(){
        $productoA=Producto::all();
        $vista=view('componentes.productos.productosUserPDF', compact('productoA'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }



}
