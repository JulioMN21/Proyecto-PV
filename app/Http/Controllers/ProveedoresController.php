<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use DB;
use Alert;
class ProveedoresController extends Controller
{

  public function index()
  {
        return view('componentes.proveedores.pProveedores');
  }

  public function registrarProveedores(){
         $proveedores=Proveedor::all();
    	return view('componentes.proveedores.registrar', compact('proveedores'));
    }

    public function guardarProveedor (Request $datos){

      
    	$proveedores= new Proveedor();
    	$proveedores->nombre=$datos->input('nombre');
    	$proveedores->telefono=$datos->input('telefono');
        $proveedores->cel=$datos->input('celular');
    	$proveedores->email=$datos->input('email');
        $proveedores->cod_postal=$datos->input('cod_postal');
        $proveedores->estado=$datos->input('estado');
    	$proveedores->direccion=$datos->input('direccion');
        $proveedores->RFC=$datos->input('RFC');
        $proveedores->tipo=$datos->input('tipo');
        $proveedores->usuCreador=Auth()->User()->id;
    	$proveedores->save();
        alert()->success('El Proveedor se a registrado correctamente', 'EXITO');
    	return Redirect('/componentes/proveedores/consultar');
    }



  public function consultarProveedores() {
      $proveedores=DB::table('proveedores')
          ->select('proveedores.*')
           ->where('status', '<>', 0)
          ->paginate(5);

      return view('componentes.proveedores.consultar', compact('proveedores'));
  }

   public function eliminarProveedor($id) {
        $proveedores=Proveedor::find($id);
        $proveedores->status=0;
        $proveedores->save();
        Alert::basic('El Proveedor seleccionado ah sido eliminado correctamente', 'Exito');
        return Redirect('/componentes/proveedores/consultar');
    }

    public function editarProveedor($id){
        $proveedores=Proveedor::find($id);
        return view('/componentes/proveedores/editar', compact('proveedores'));
    }



    public function actualizarCliente(Request $datos, $id){
        $proveedores=Proveedor::find($id);
        $proveedores->nombre=$datos->input('nombre');
        $proveedores->telefono=$datos->input('telefono');
        $proveedores->cel=$datos->input('celular');
        $proveedores->email=$datos->input('email');
        $proveedores->cod_postal=$datos->input('cod_postal');
        $proveedores->estado=$datos->input('estado');
        $proveedores->direccion=$datos->input('direccion');
        $proveedores->RFC=$datos->input('RFC');
        $proveedores->tipo=$datos->input('tipo');
        $proveedores->usuModificador=Auth()->User()->id;
        $proveedores->save();
        alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/proveedores/consultar');
    }


    public function proveedoresPDF(){
        $clientesA=Cliente::all();
        $vista=view('componentes.clientes.clientesPDF', compact('clientesA'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }

    public function clientesDetalladoPDF(){
        $clientesA=Cliente::all();
        $vista=view('componentes.clientes.clientesDetalladoPDF', compact('clientesA'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }
}
