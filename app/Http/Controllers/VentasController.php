<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Venta;
use App\Detalle_Ventas;
use App\Producto;
use App\Cliente;
use DB;
use Alert;
class VentasController extends Controller

{
    public function agregarVenta(Request $datos) {
    try {
      DB::beginTransaction();
            
      $id = DB::table('ventas')->max('id');
      $id = $id + 1;

      $venta = new Venta();
      $venta->id = $id;
      $venta->cliente = $datos['cliente'];
      $venta->caja = $datos['caja'];
      $venta->total=0;
      $venta->usuCreador =Auth()->User()->id ;

      $venta->save();
      
      foreach ($datos['productos'] as $producto) {
        $detalle = new Detalle_Ventas();
        $detalle->id_venta = $id;
        $detalle->cod_producto = $producto['id'];
        $detalle->cantidad = $producto['cantidad'];
        $detalle->total = $producto['total'];
        $venta->total=$producto['total'];
        $detalle->usuCreador = Auth()->User()->id;

        $detalle->save();

        $producto = Producto::find($producto['id']);
        $existencia = $producto->i_existencia - $detalle->cantidad;
        $producto->i_existencia = $existencia;
        $producto->save();
      }

      DB::commit();
    } catch (Exception $e) {
            DB::rollback();
           
            $success = false;
            $message = "Ocurrió un error al finalizar la venta! (" + $e->getMessage() + ")";
            return response()->json(compact('success', 'message'));
        }

        alert()->success('Venta realizada correctamente', 'EXITO');
        $success = true;
        $message =  "Venta realizada con éxito!";
    return response()->json(compact('success', 'message'));
  }


    public function guardarVenta (Request $datos){
      $venta= new Venta();
      $venta->cliente=$datos->input('cliente');
      $venta->caja=$datos->input('caja');
   
      $venta->usuCreador=Auth()->User()->id;
      $venta->save();
      alert()->success('La Venta se a registrado correctamente', 'EXITO');
      return Redirect('/componentes');
    }

    public function consultarventas() {
    	$clientes=Cliente::all();
        $ventas=DB::table('ventas')
            ->select('ventas.*')
            ->where('status', '<>', 0)
            ->paginate(15);

        return view('componentes.ventas.consultar', compact('ventas','clientes'));
    }

    public function eliminarventas($id) {
        $Venta=Venta::find($id);
        $Venta->status=0;
        $Venta->save();
        return Redirect('/componentes/ventas/consultar');
    }

    public function editarventas($id){
        $Venta=Venta::find($id);
        return view('/componentes/ventas/editar', compact('Venta'));
    }

    public function actualizarventas(Request $datos, $id){
        $venta=Venta::find($id);
        $venta->inciial=$datos->input('incial');
        $venta->cantidad=$datos->input('final');
        $venta->usuModificador= Auth()->User()->id;
        $venta->save();
    	alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/ventas/consultar');
    }

 	public function consultarDetalles ($id){
      $venta=Venta::find($id);
      $clientes=Cliente::all();
      $productos=Producto::all();
      $detalle= DB::select('select DV.id_venta as id, V.caja as caja, V.cliente as cliente, DV.cod_producto as producto ,
      							 DV.cantidad as cantidad, DV.total as total, DV.created_at as fecha 
        							from detalle_ventas DV  
        								inner join ventas as V
      										on V.id= DV.id_venta
      											where V.id = ?',[$id]);
      return view('/componentes/ventas/consultarDetalles', compact('venta','detalle','productos','clientes'));
	}


}

