<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\User;
use DB;

class PrincipalController extends Controller
{


  public function principal(){
      $clientes=Cliente::all();
      return view('componentes.index', compact('clientes'));
  }

   public function administrador(){
      return view('componentes.Administrador.index');
  }


  public function registrar(){
    return view('auth.register');
  }


   public function consultaUsuarios(){
      $user=User::all();
      $user=DB::table('users')
            ->select('users.*')
            ->paginate(5);

        return view('componentes.user.consultar', compact('user'));
    }

    public function eliminarUser($id) {
        $user=User::find($id);
        $user->delete();

        return Redirect('/componentes/user/consultar');
    }

        public function UserPDF(){
        $user=User::all();
        $vista=view('componentes.user.UserPDF', compact('user'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('reporte.pdf');
    }

}
