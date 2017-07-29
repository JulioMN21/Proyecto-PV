<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Caja;
use DB;
use Alert;
class CajasController extends Controller

{
    public function registrarCaja(){
      return view('componentes.cajas.registrar');
    }

    public function guardarCaja (Request $datos){
      $caja= new Caja();
      $caja->id=$datos->input('no');
      $caja->inicial=$datos->input('inicial');
      $caja->Usuario=1;
      $caja->usuCreador=1;
      $caja->status=1;
      $caja->save();

      
      alert()->success('La caja se a registrado correctamente', 'EXITO');
      return Redirect('/componentes/cajas/consultar');
    }

    public function consultarCajas() {
        $cajas=DB::table('cajas')
            ->select('cajas.*')
            ->where('status', '<>', 0)
            ->paginate(5);

        return view('componentes.cajas.consultar', compact('cajas'));
    }

    public function eliminarCajas($id) {
        $caja=Caja::find($id);
        $caja->status=0;
        $caja->save();
        Alert::basic('la clase seleccionada ah sido eliminada correctamente', 'Exito');
        return Redirect('/componentes/cajas/consultar');
    }

    public function editarCajas($id){
        $caja=Caja::find($id);
        return view('/componentes/cajas/editar', compact('caja'));
    }

    public function actualizarCajas(Request $datos, $id){
        $caja=Caja::find($id);
        $caja->inicial=$datos->input('inicial');
        $caja->cantidad=$datos->input('final');
        $caja->usuModificador=1;
        $caja->save();
    	alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/cajas/consultar');
    }

 public function AbrirCaja (Request $datos){
      $caja=Caja::find($datos->input('no'));
      $caja->inicial=$datos->input('inicial');
      $caja->Usuario=1;
      $caja->usuCreador=1;
      $caja->status=1;
      $caja->save();
      alert()->success('La caja se a Abierto correctamente', 'EXITO');
      return Redirect('/componentes');
	}

}

