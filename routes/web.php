<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LandingPageController;
use App\Http\Controllers\Auth\DocumentoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('welcome');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/landingpage', [App\Http\Controllers\LandingPageController::class, 'index'])->name('welcome');
Route::post('/landingpage', [App\Http\Controllers\LandingPageController::class, 'send'])->name('send.email');

Route::middleware(['logged'])->group(function () {

    // RUTAS DE NOTARIO ENCAPSULADAS
    Route::middleware(['notario'])->group(function () {
        Route::get('/notario', [App\Http\Controllers\UsersController::class, 'indexNotario'])->name('notario.index');
        Route::get('/notario/ver/{idDoc}', [App\Http\Controllers\UsersController::class, 'verDocumentoNotario'])->name('notario.ver');
        Route::get('/notario/edit/{idDoc}', [App\Http\Controllers\UsersController::class, 'firmaDocumentoNotario'])->name('notario.firmar');
        Route::get('/notario/rechazar/{idDoc}', [App\Http\Controllers\UsersController::class, 'rechazarDocumentoNotario'])->name('notario.rechazar');
        //Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
        //Route::get('/usuario/edit/{idUsuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Route::post('/usuario/delete/{idUsuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
        //Route::post('admin/create', [UsuarioController::class, 'store'])->name('usuario.store');
        //Route::get('/usuario/show/{idUsuario}', [UsuarioController::class, 'show'])->name('usuario.show');
        //Route::patch('/usuario/edit/{idUsuario}', [UsuarioController::class, 'update'])->name('usuario.update');
    });
    // RUTAS DE CONSERVADOR ENCAPSULADAS
    Route::middleware(['conservador'])->group(function () {
        Route::get('/conservador', [App\Http\Controllers\UsersController::class, 'indexConservador'])->name('conservador.index');
        Route::get('/conservador/ver/{idDoc}', [App\Http\Controllers\UsersController::class, 'verDocumentoConservador'])->name('conservador.ver');
        Route::get('/conservador/edit/{idDoc}', [App\Http\Controllers\UsersController::class, 'firmaDocumentoConservador'])->name('conservador.firmar');
        Route::get('/conservador/rechazar/{idDoc}', [App\Http\Controllers\UsersController::class, 'rechazarDocumentoConservador'])->name('conservador.rechazar');
        //Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
        //Route::get('/usuario/edit/{idUsuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Route::post('/usuario/delete/{idUsuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
        //Route::post('admin/create', [UsuarioController::class, 'store'])->name('usuario.store');
        //Route::get('/usuario/show/{idUsuario}', [UsuarioController::class, 'show'])->name('usuario.show');
        //Route::patch('/usuario/edit/{idUsuario}', [UsuarioController::class, 'update'])->name('usuario.update');
    });
    // RUTAS DE CLIENTE ENCAPSULADAS
    Route::middleware(['cliente'])->group(function () {
        Route::get('/cliente', [App\Http\Controllers\UsersController::class, 'indexCliente'])->name('cliente.index');
        Route::get('/clienteventas', [App\Http\Controllers\UsersController::class, 'indexClienteVentas'])->name('cliente.ventas');
        Route::get('/clientepropiedades', [App\Http\Controllers\UsersController::class, 'indexClientePropiedades'])->name('cliente.propiedades');
        Route::get('/cliente/verCompra/{idDoc}', [App\Http\Controllers\UsersController::class, 'verDocumentoClienteCompra'])->name('cliente.verCompra');
        Route::get('/cliente/verVenta/{idDoc}', [App\Http\Controllers\UsersController::class, 'verDocumentoClienteVenta'])->name('cliente.verVenta');
        Route::get('/cliente/verPropiedad/{idDoc}', [App\Http\Controllers\UsersController::class, 'verDocumentoClientePropiedad'])->name('cliente.verPropiedad');
        Route::get('/cliente/firmarCompra/{idDoc}', [App\Http\Controllers\UsersController::class, 'firmaDocumentoComprador'])->name('clienteCompra.firmar');
        Route::get('/cliente/firmarVenta/{idDoc}', [App\Http\Controllers\UsersController::class, 'firmaDocumentoVendedor'])->name('clienteVenta.firmar');
        Route::get('/cliente/rechazarCompra/{idDoc}', [App\Http\Controllers\UsersController::class, 'rechazarDocumentoComprador'])->name('clienteCompra.rechazar');
        Route::get('/cliente/rechazarVenta/{idDoc}', [App\Http\Controllers\UsersController::class, 'rechazarDocumentoVendedor'])->name('clienteVenta.rechazar');
        //Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
        //Route::get('/usuario/edit/{idUsuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Route::post('/usuario/delete/{idUsuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
        //Route::post('admin/create', [UsuarioController::class, 'store'])->name('usuario.store');
        //Route::get('/usuario/show/{idUsuario}', [UsuarioController::class, 'show'])->name('usuario.show');
        //Route::patch('/usuario/edit/{idUsuario}', [UsuarioController::class, 'update'])->name('usuario.update');
    });
    // RUTAS DE TRABAJADOR ENCAPSULADAS
    Route::middleware(['trabajador'])->group(function () {
        Route::get('/trabajador', [App\Http\Controllers\UsersController::class, 'indexTrabajador'])->name('trabajador.index');
        Route::post('trabajador/submit', [App\Http\Controllers\DocumentoController::class, 'submitCompraventa'])->name('compraventa.submit');
        Route::get('/queryall', [App\Http\Controllers\APIController::class, 'queryone'])->name('query.all');
        Route::get('/cargarComunas', [App\Http\Controllers\ComunaController::class, 'cargarComuna'])->name('trabajador.comunas');
        Route::get('/trabajador/registrar', [App\Http\Controllers\UsersController::class, 'registrarTrabajador'])->name('trabajador.registrar');
        Route::post('/trabajador/registar/usuario', [App\Http\Controllers\UsersController::class, 'enrollUsuario'])->name('trabajador.enroll');
        Route::post('/trabajador/getrutComprador', [App\Http\Controllers\UsersController::class, 'confirmarRUTVendedor'])->name('vendedor.rut');
        Route::post('/trabajador/getrutVendedor', [App\Http\Controllers\UsersController::class, 'confirmarRUTComprador'])->name('comprador.rut');
        Route::post('/trabajador/postCompraventa', [App\Http\Controllers\UsersController::class, 'ingresarCompraventa'])->name('trabajador.compraventa');
        //Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
        //Route::get('/usuario/edit/{idUsuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Route::post('/usuario/delete/{idUsuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
        //Route::get('/usuario/show/{idUsuario}', [UsuarioController::class, 'show'])->name('usuario.show');
        //Route::patch('/usuario/edit/{idUsuario}', [UsuarioController::class, 'update'])->name('usuario.update');
    });
    // RUTAS DE ADMIN ENCAPSULADAS
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [App\Http\Controllers\UsersController::class, 'indexAdmin'])->name('admin.index');
        //Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
        //Route::get('/usuario/edit/{idUsuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Route::post('/usuario/delete/{idUsuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
        //Route::post('admin/create', [UsuarioController::class, 'store'])->name('usuario.store');
        //Route::get('/usuario/show/{idUsuario}', [UsuarioController::class, 'show'])->name('usuario.show');
        //Route::patch('/usuario/edit/{idUsuario}', [UsuarioController::class, 'update'])->name('usuario.update');
    });
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');