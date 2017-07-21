<?php

use App\Usuario;
use App\Cliente;
use App\Clase;
use App\Producto;
use App\Familia;

Route::get('/', function () {
  return view('auth.login');
});


Route::get('/componentes/administrador', 'PrincipalController@administrador')->name('administrador');
Auth::routes();

Route::group(['middleware' => 'auth'], function() {


  Route::get('/getproducto/{id}', 'ProductosController@getProducto');
  Route::get('/getproducto/codigo/{codigo}', 'ProductosController@getProductoCodigo');
  Route::post('/agregarventa', 'VentasController@agregarVenta');

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/componentes/administrador', 'HomeController@index')->name('admin');

  Route::get('/componentes', 'PrincipalController@principal')->name('princiapl');
  Route::get('/componentes/administrador', 'PrincipalController@administrador')->name('administrador');

  Route::get('/componentes/ventas/registrar', 'VentasController@registrarVenta');

Route::group(['middleware' => 'Admin'], function(){
  //USERS
  Route::get('/componentes/user/consultar', 'PrincipalController@consultaUsuarios');
  Route::get('/eliminarUser/{id}', 'PrincipalController@eliminarUser');
  Route::get('/componentes/user/UserPDF', 'PrincipalController@UserPDF');

//CLIENTES
  Route::get('/componentes/clientes/registrar', 'clientesController@registrarClientes');
  Route::get('/componentes/clientes/pClientes', 'ClientesController@index');
  Route::get('/componentes/clientes/consultar', 'ClientesController@consultarClientes');
  Route::post('/guardarCliente', 'ClientesController@guardarCliente');
  Route::post('/actualizarCliente/{id}', 'ClientesController@actualizarCliente');
  Route::get('/eliminarCliente/{id}', 'ClientesController@eliminarCliente');
  Route::get('/editarCliente/{id}', 'ClientesController@editarCliente');
  Route::get('/componentes/clientes/clientesPDF', 'ClientesController@clientesPDF');
  Route::get('/componentes/clientes/clientesDetalladoPDF', 'ClientesController@clientesDetalladoPDF');

  //VENTAS
  Route::get('/componentes/ventas/consultar', 'VentasController@consultarVentas');
  Route::get('/consultarDetalles/{id}', 'VentasController@consultarDetalles');

   //CAJAS
  Route::get('/componentes/cajas/registrar', 'CajasController@registrarCaja');
  Route::get('/componentes/cajas/consultar', 'CajasController@consultarCajas');
  Route::post('/guardarCaja', 'CajasController@guardarCaja');
  Route::get('/eliminarCajas/{id}', 'CajasController@eliminarCajas');  
  Route::get('/editarCajas/{id}', 'CajasController@editarCajas');
  Route::post('/actualizarCajas/{id}', 'CajasController@actualizarCajas');
  Route::post('/AbrirCaja', 'CajasController@AbrirCaja');

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

  //FAMILIAS
  Route::get('/componentes/familias/registrar', 'FamiliasController@registrarFamilias');
  Route::get('/componentes/familias/pFamilias', 'FamiliasController@index');
  Route::get('/componentes/familias/consultar', 'FamiliasController@consultarFamilias');
  Route::get('/componentes/familias/editar/{id}', 'FamiliasController@editarFamilia');
  Route::post('/guardarFamilia', 'FamiliasController@guardarFamilia');
  Route::get('/editarFamilia/{id}', 'FamiliasController@editarFamilia');
  Route::post('/actualizarFamilia/{id}', 'FamiliasController@actualizarFamilia');
  Route::get('/eliminarFamilia/{id}', 'FamiliasController@eliminarFamilia');
  Route::get('/componentes/familias/familiasPDF', 'FamiliasController@familiasPDF');
  Route::get('/componentes/familias/familiasDetalladoPDF', 'FamiliasController@familiasDetalladoPDF');

  //PRODUCTOS
  Route::get('/componentes/productos/registrar', 'ProductosController@registrarProductos');
  Route::get('/componentes/productos/pProductos', 'ProductosController@index');
  Route::get('/componentes/productos/consultar', 'ProductosController@consultarProductos');
  Route::post('/guardarProducto', 'ProductosController@guardarProducto');
  Route::post('/actualizarProducto/{id}', 'ProductosController@actualizarProducto');
  Route::get('/eliminarProducto/{id}', 'ProductosController@eliminarProducto');
  Route::get('/editarProducto/{id}', 'ProductosController@editarProducto');
  Route::get('/componentes/productos/productosPDF', 'ProductosController@productosPDF');
  Route::get('/componentes/productos/productosDetalladoPDF', 'ProductosController@productosDetalladoPDF');
  Route::get('/componentes/productos/productosUserPDF', 'ProductosController@productosUserPDF');


});

});
