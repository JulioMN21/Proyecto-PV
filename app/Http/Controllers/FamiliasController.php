<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Clase;
use DB;
use Alert;
class FamiliasController extends Controller
{
  public function index(){
    return view('componentes.familias.pFamilias');
  }

  public function registrarFamilias(){
  $clase=Clase::all();
return view('componentes.familias.registrar', compact('clase'));
}

public function guardarFamilia (Request $datos){
  $familia= new Familia();
  $familia->id_clase=$datos->input('clase');
  $familia->vc_nombre=$datos->input('nombre');
  $familia->usuCreador=1;
  $familia->status=1;
  $familia->save();
  alert()->success('La familia se a registrado correctamente', 'EXITO');
  return Redirect('/componentes/familias/consultar');
}

public function consultarFamilias() {
  $familias=DB::table('familias')
  
      ->select('familias.*')
      ->where('status', '<>', 0)
      ->paginate(5);
      $clases=Clase::all();
  return view('componentes.familias.consultar', compact('familias','clases'));
}

 public function eliminarFamilia($id) {
        $familia=Familia::find($id);
        $familia->status=0;
        $familia->save();
        Alert::basic('La familia seleccionada ah sido eliminado correctamente', 'Exito');
        return Redirect('/componentes/familias/consultar');
    }
       public function editarFamilia($id){
        $familia=Familia::find($id);
        $claseM=Clase::all();
        return view('componentes.familias.editar', compact('familia','claseM'));
    }

    public function actualizarFamilia(Request $datos, $id){
        $familia=Familia::find($id);
        $familia->id_clase=$datos->input('clase');
        $familia->vc_nombre=$datos->input('nombre');
        $familia->save();
        alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/familias/consultar');
    }

    public function familiasPDF(){
        $familias=Familia::all();
        $clases=Clase::all();
        $vista=view('componentes.familias.familiasPDF', compact('familias','clases'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reportefam.pdf');
    }

     public function familiasDetalladoPDF(){
        $familias=Familia::all();
        $clases=Clase::all();
        $vista=view('componentes.familias.familiasDetalladoPDF', compact('familias','clases'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reportefam.pdf');
    }

}
