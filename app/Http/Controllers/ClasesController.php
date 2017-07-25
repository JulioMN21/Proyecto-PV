<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use DB;
use Alert;
class clasesController extends Controller
{
    public function registrarClases(){
      return view('componentes.clases.registrar');
    }

    public function guardarClase (Request $datos){
      $clase= new clase();
      $clase->vc_nombre=$datos->input('nombre');
      $clase->usuCreador=1;
      $clase->status=1;
      $clase->save();

      
        alert()->success('La clase se a registrado correctamente', 'EXITO');
      return Redirect('/componentes');
    }

    public function consultarClases() {
        $clases=DB::table('clases')
            ->select('clases.*')
            ->where('status', '<>', 0)
            ->paginate(5);

        return view('componentes.clases.consultar', compact('clases'));
    }

    public function eliminarClase($id) {
        $clase=Clase::find($id);
        $clase->status=0;
        $clase->save();
        Alert::basic('La clase seleccionada ah sido eliminada correctamente', 'Exito');
        return Redirect('/componentes/clases/consultar');
    }

    public function editarClase($id){
        $clase=Clase::find($id);
        return view('/componentes/clases/editarClase', compact('clase'));
    }

    public function actualizarClase(Request $datos, $id){
        $clase=Clase::find($id);
        $clase->vc_nombre=$datos->input('nombre');
        $clase->save();
    alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/clases/consultar');
    }

    public function ClasesPDF(){
        $clases=Clase::all();
        $vista=view('componentes.clases.clasesPDF', compact('clases'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }

     public function ClasesDetalladoPDF(){
        $clases=Clase::all();
        $vista=view('componentes.clases.clasesPDF', compact('clases'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }
}
