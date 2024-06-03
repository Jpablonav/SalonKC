<?php
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Proovedor;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuariosNewController;
use Illuminate\Support\Facades\Route;
use App\Models\User;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::view('/inicio','index/inicio');
// Route::view('productos','plantilla/productos');
// Route::view('servicio','plantilla/servicio');
// Route::view('/contacto','plantilla/contacto');
// Route::view('shampooplatino','plantilla/Carpeta_Productos/shampooplatino');

/* usuario */
Route::view('/inicio','/cliente/plantilla/inicio');
// Route::view('/productos','/cliente/plantilla/productos');
Route::view('/servicio','/cliente/plantilla/servicio');
Route::view('/contacto','/cliente/plantilla/contacto');
Route::view('/terminos','/heredar/plantilla/terminos');
// Route::view('/shampooplatino','/cliente/plantilla/shampooplatino');
// Route::view('ialuronico','/heredar/plantilla/ialuronico');
// Route::view('maschera','heredar/plantilla/maschera');
// Route::view('pozione','heredar/plantilla/pozione');

/* admin */

//plantilla dashboard
Route::view('/dashboard','/admin/plantilla/appadmin');

//productos
// Route::view('producto','/admin/heredar_admin/producto/producto');
// Route::view('tablaproducto','/admin/heredar_admin/producto/producto_tabla');

//clientes
// Route::view('cliente','/admin/heredar_admin/cliente/cliente');
// Route::view('tablacliente','/admin/heredar_admin/cliente/cliente_tabla');

//servicios
// Route::view('servicios','/admin/heredar_admin/servicios/servicios');
// Route::view('tablaservicios','/admin/heredar_admin/servicios/servicios_tabla');

//cita
 //Route::view('cita','/admin/heredar_admin/cita/cita');
//Route::view('tablacita','/admin/heredar_admin/cita/cita_tabla');

//usuario
// Route::view('usuario','/admin/heredar_admin/usuario/usuario');
// Route::view('tablausuarios','/admin/heredar_admin/usuario/usuarios_tabla');

//empleados
// Route::view('empleados','/admin/heredar_admin/empleado/empleados');
// Route::view('tablaempleados','/admin/heredar_admin/empleado/empleados_tabla');

//controlador cliente
Route::get('/clientes',[ClienteController::class,'listado'])->name('clientes.index');
Route::get('/clientes/{id}',[ClienteController::class,'show'])->name('clientes.show');
Route::get('/administrador/clientes/create',[ClienteController::class,'create'])->name('clientes.create');
Route::get('/clientes/{id}/editar',[ClienteController::class,'editar'])->name('clientes.edit');
Route::post('/clientes',[ClienteController::class,'guardar'])->name('clientes.store');
Route::put('/clientes/{id}',[ClienteController::class,'actualizar'])->name('clientes.update');
Route::delete('/clientes/{id}',[ClienteController::class,'borrar'])->name('clientes.delete');

//controlador servicios
Route::get('/servicios',[ServicioController::class,'list'])->name('servicios.index');
Route::get('/servicios/{id}',[ServicioController::class,'seleccionar'])->name('servicios.show');
Route::get('/administrador/servicios/form',[ServicioController::class,'form'])->name('servicios.create');
Route::get('/servicios/{id}/editar',[ServicioController::class,'editt'])->name('servicios.edit');
Route::post('/servicios',[ServicioController::class,'save'])->name('servicios.store');
Route::put('/servicios/{id}',[ServicioController::class,'act'])->name('servicios.update');
Route::delete('/servicios/{id}',[ServicioController::class,'delete'])->name('servicios.delete');

//controlador empleados
Route::get('/empleados',[EmpleadoController::class,'listado'])->name('empleado.index');
Route::get('/empleados/{id}',[EmpleadoController::class,'selectid'])->name('empleados.show');
Route::get('/administrador/empleados/formulario',[EmpleadoController::class,'formulario'])->name('empleados.create');
Route::get('/empleados/{id}/editar',[EmpleadoController::class,'editar'])->name('empleados.edit');
Route::post('/empleados',[EmpleadoController::class,'guardar'])->name('empleados.store');
Route::put('/empleados/{id}',[EmpleadoController::class,'actualizar'])->name('empleados.update');
Route::delete('/empleados/{id}',[EmpleadoController::class,'eliminar'])->name('empleados.delete');

//controlador productos
Route::get('/productos2',[ProductoController::class,'listado'])->name('producto.index');
Route::get('/productos/{id}',[ProductoController::class,'selectid'])->name('productos.show');
Route::get('/administrador/productos/formulario',[ProductoController::class,'formulario'])->name('productos.create');
Route::get('/productos/{id}/editar',[ProductoController::class,'editar'])->name('productos.edit');
Route::post('/productos',[ProductoController::class,'guardar'])->name('productos.store');
Route::put('/productos/{id}',[ProductoController::class,'actualizar'])->name('productos.update');
Route::delete('/productos/{id}',[ProductoController::class,'eliminar'])->name('productos.delete');


//cita
 //Route::view('cita','/admin/heredar_admin/cita/cita');
//Route::view('tablacita','/admin/heredar_admin/cita/cita_tabla');
//controlador cita
Route::get('/citas',[CitaController::class,'listado'])->name('citas.index');
Route::get('/citas/{id}',[CitaController::class,'selectid'])->name('citas.show');
Route::get('/administrador/citas/formulario',[CitaController::class,'formulario'])->name('citas.create');
Route::get('citas/{id}/editar',[CitaController::class,'editar'])->name('citas.edit');
Route::post('/citas',[CitaController::class,'guardar'])->name('citas.store');
Route::put('/citas/{id}',[CitaController::class,'actualizar'])->name('citas.update');
Route::delete('/citas/{id}',[CitaController::class,'eliminar'])->name('citas.delete');

//Controlador Usuario
 Route::get('/usuario',[UsuarioController::class,'listado'])->name('usuarios.index');
 Route::get('/usuarios/{id}',[UsuarioController::class,'selectid'])->name('usuarios.show'); 
 Route::get('/administrador/usuarios/formulario',[UsuarioController::class,'formulario'])->name('usuarios.create');
 Route::get('usuarios/{id}/editar',[UsuarioController::class,'editar'])->name('usuarios.edit');
 Route::post('/usuarios',[UsuarioController::class,'guardar'])->name('usuarios.store');
 Route::put('/usuarios/{id}',[UsuarioController::class,'actualizar'])->name('usuarios.update');
 Route::delete('/usuarios/{id}',[UsuarioController::class,'eliminar'])->name('usuarios.delete');

 //Controlador UsuariosNew
Route::get('/usuario_new',[UsuariosNewController::class,'listado'])->name('usuariosnew.index');
Route::get('/usuarios_new/{id}',[UsuariosNewController::class,'selectid'])->name('usuariosnew.show');
Route::get('/administrador/usuariosnew/formulario',[UsuariosNewController::class,'formulario'])->name('usuariosnew.create');
Route::get('/usuariosnew/{id}/editar',[UsuariosNewController::class,'editar'])->name('usuariosnew.edit');
Route::post('/usuariosnew',[UsuariosNewController::class,'guardar'])->name('usuariosnew.store');
Route::put('/usuariosnew/{id}',[UsuariosNewController::class,'actualizar'])->name('usuariosnew.update');
Route::delete('/usuariosnew/{id}',[UsuariosNewController::class,'borrar'])->name('usuariosnew.delete');



//Controlador Proovedor
Route::get('/proovedor',[ProovedorController::class,'listado'])->name('proovedor.index');
Route::get('/proovedor/{id}',[ProovedorController::class,'selectid'])->name('proovedor.show');
Route::get('/administrador/proovedor/{id}',[ProovedorController::class,'form'])->name('proovedor.create');
Route::get('/proovedor/{id}/editar',[ProovedorController::class,'editar'])->name('proovedor.edit');
Route::post('/proovedor',[ProovedorController::class,'guardar'])->name('proovedor.store');
Route::put('/proovedor/{id}',[ProovedorController::class,'act'])->name('proovedor.update');
Route::delete('/proovedor/{id}',[ProovedorController::class,'borrar'])->name('proovedor.delete');

Route::get('/sucursal',[SucursalController::class,'listado'])->name('sucursal.index');
Route::get('/sucursal/{id}',[SucursalController::class,'selectid'])->name('sucursal.show');
Route::get('/administrador/sucursal/{id}',[SucursalController::class,'form'])->name('sucursal.create');
Route::get('/sucursal/{id}/editar',[SucursalController::class,'editar'])->name('sucursal.edit');
Route::post('/sucursal',[SucursalController::class,'guardad'])->name('sucursal.store');
Route::put('/sucursal/{id}',[SucursalController::class,'act'])->name('sucursal.update');
Route::delete('/sucursal/{id}',[SucursalController::class,'borrar'])->name('sucursal.delete');


Route::get('/login',[\App\Http\Controllers\auth\LoginController::class,'show'])->name('login'); //vista
// Route::get('/dashboard',[\App\Http\Controllers\auth\LoginController::class,''
Route::post('/authentication',[\App\Http\Controllers\auth\LoginController::class,'authenticate']); //proceso
Route::post('/logout',[App\Http\Controllers\auth\LoginController::class,'logOut'])->name('logout'); //proceso


//  Route::get('/users/insert', function () {
//     $user=new \App\Models\User();
//     $user->name='Fernando';
//     $user->email='fer@gmail.com';
//     $user->password=Hash::make('12345678');
//     $user->image='/storage/imagenes/usuarios/default.jpg';
//     $user->rol='admin';
//     $user->status='inactive';
//     $user->Telefono='1122334455';
//     $user->save();
//      return 'Usuario Registrado';
// });


//Controlador catalogo
Route::get('/catalogo',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'catalogo'])->name('catalogo');
Route::get('/detalle/{id}',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'detalle'])->name('detalle');
Route::post('/catalogo/categoria',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'filtro_categoria'])->name('catalogo.categoria');


//Rutas de carrito
Route::get('/agregar_carrito/{id}',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'agregarCarrito'])->name('carrito.agregar');
Route::get('/actualizar_carrito',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'actualizarCarrito'])->name('carrito.actualizar');
Route::get('/quitar_carrito',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'quitarCarrito'])->name('carrito.quitar');
Route::get('/vaciar_carrito',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'vaciarCarrito'])->name('carrito.vaciar');
Route::get('/mostrar_carrito',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'mostrarCarrito'])->name('carrito.mostrar');
Route::get('/pagar_carrito',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'pagarCarrito'])->name('carrito.pagar');
Route::get('/productos3',[\App\Http\Controllers\cliente\ProductoCatalogoController::class,'productos'])->name('productos');

Route::view('/plantillacarrito','/cliente/carrito/layout');

// // routes/web.php
// Route::get('/terminos', function () {
//     return view('terminos');
// });