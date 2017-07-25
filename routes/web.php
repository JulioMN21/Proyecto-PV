<?php

use App\Usuario;
use App\Clase;


Route::get('/', function () {
  $claseM=Clase::all();
  
  

  return view('auth.login',  compact('usuario','claseM'));
});


Route::get('/componentes/administrador', 'PrincipalController@administrador')->name('administrador');
Auth::routes();

Route::group(['middleware' => 'auth'], function() {


  
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/componentes/administrador', 'HomeController@index')->name('admin');

  Route::get('/componentes', 'PrincipalController@principal')->name('princiapl');
  Route::get('/componentes/administrador', 'PrincipalController@administrador')->name('administrador');


Route::group(['middleware' => 'Admin'], function(){

  //USERS
  Route::get('/componentes/user/consultar', 'PrincipalController@consultaUsuarios');
  Route::get('/eliminarUser/{id}', 'PrincipalController@eliminarUser');
  Route::get('/componentes/user/UserPDF', 'PrincipalController@UserPDF');


  //CLASES
  Route::get('/componentes/clases/registrar', 'ClasesController@registrarClases');
  Route::get('/componentes/clases/pClases', 'ClasesController@index');
  Route::get('/componentes/clases/consultar', 'ClasesController@consultarClases');
  Route::post('/guardarClase', 'ClasesController@guardarClase');
  Route::get('/eliminarClase/{id}', 'ClasesController@eliminarClase');  
  Route::get('/editarClase/{id}', 'ClasesController@editarClase');
  Route::post('/actualizarClase/{id}', 'ClasesController@actualizarClase');
  Route::get('/componentes/clases/clasesPDF', 'ClasesController@clasesPDF');
  Route::get('/componentes/clases/ClasesDetalladoPDF', 'ClasesController@ClasesDetalladoPDF');

});

});
