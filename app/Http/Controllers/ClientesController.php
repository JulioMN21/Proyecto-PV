<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
use Alert;
class ClientesController extends Controller
{

  public function index()
  {
        return view('componentes.clientes.pClientes');
  }

  public function registrarClientes(){
         $clientes=Cliente::all();
    	return view('componentes.clientes.registrar', compact('clientes'));
    }

    public function guardarCliente (Request $datos){

      
    	$clientes= new Cliente();
    	$clientes->vc_nombre=$datos->input('nombre');
        $clientes->vc_apellidoP=$datos->input('app');
        $clientes->vc_apellidoM=$datos->input('apm');
    	$clientes->d_fecha_nacimiento=$datos->input('edad');
    	$clientes->vc_telefono=$datos->input('telefono');
    	$clientes->vc_email=$datos->input('correo');
    	$clientes->vc_direccion=$datos->input('direccion');
        $clientes->vc_municipio=$datos->input('municipio');
        $clientes->vc_estado=$datos->input('estado');
        $clientes->sexo=$datos->input('sexo');
        $clientes->cod_postal=$datos->input('cod_postal');
        $clientes->usuCreador=Auth()->User()->id;
    	$clientes->save();

        alert()->success('El cliente se a registrado correctamente', 'EXITO');
    	return Redirect('/componentes/clientes/consultar');
    }



  public function consultarClientes() {
      $clientes=DB::table('clientes')
          ->select('clientes.*')
           ->where('status', '<>', 0)
          ->paginate(5);

      return view('componentes.clientes.consultar', compact('clientes'));
  }

   public function eliminarCliente($id) {
        $clientes=Cliente::find($id);
        $clientes->status=0;
        $clientes->save();
        Alert::basic('El cliente seleccionado ah sido eliminado correctamente', 'Exito');
        return Redirect('/componentes/clientes/consultar');
    }

    public function editarCliente($id){
        $clientes=Cliente::find($id);
        $clientesA=Cliente::all();
        return view('/componentes/clientes/editar', compact('clientes','clientesA'));
    }



    public function actualizarCliente(Request $datos, $id){
        $clientes=Cliente::find($id);
        $clientes->vc_nombre=$datos->input('nombre');
        $clientes->vc_apellidoP=$datos->input('app');
        $clientes->vc_apellidoM=$datos->input('apm');
        $clientes->d_fecha_nacimiento=$datos->input('edad');
        $clientes->vc_telefono=$datos->input('telefono');
        $clientes->vc_email=$datos->input('correo');
        $clientes->vc_direccion=$datos->input('direccion');
        $clientes->vc_municipio=$datos->input('municipio');
        $clientes->vc_estado=$datos->input('estado');
        $clientes->sexo=$datos->input('sexo');
        $clientes->cod_postal=$datos->input('cod_postal');
        $clientes->usuModificador=Auth()->User()->id;
        $clientes->save();

        alert()->success('Actualizacion realizada correctamente', 'Exito');
        return Redirect('/componentes/clientes/consultar');
    }


    public function clientesPDF(){
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
