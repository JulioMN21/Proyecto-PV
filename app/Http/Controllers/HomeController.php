<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Auth;
use DB;
use Alert;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


         if (Auth()->user()->role_id == 1){
              return view('componentes.administrador.index');
         }  else{
             return view('/home');
         }
            
          
  
       
    }
}
