<?php


use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoPersonalController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'personal'], function () {

    Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
    Route::get('/create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('/', [PersonalController::class, 'store'])->name('personal.store');
    Route::get('/{id}', [PersonalController::class, 'show'])->name('personal.show');
    Route::get('/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::put('/{id}', [PersonalController::class, 'update'])->name('personal.update');
    Route::get('/{id}/destroy', [PersonalController::class, 'destroy'])->name('personal.destroy');
});


Route::group(['prefix'=>'tipo_personal'], function(){

    Route::get('/', [TipoPersonalController::class, 'index'])->name('tipo_personal.index');
    Route::get('/create', [TipoPersonalController::class, 'create']) -> name('tipo_personal.create');
    Route::post('/', [TipoPersonalController::class, 'store'])->name('tipo_personal.store');
    Route::get('/{id}', [TipoPersonalController::class, 'show'])->name('tipo_personal.show');
    Route::get('/{id}/edit', [TipoPersonalController::class, 'edit'])->name('tipo_personal.edit');
    Route::put('/{id}', [TipoPersonalController::class, 'update'])->name('tipo_personal.update');
    Route::get('/{id}/destroy', [TipoPersonalController::class, 'destroy'])->name('tipo_personal.destroy');

});

Route::group(['prefix'=>'usuario'], function(){

    Route::get('/', [UserController::class, 'index'])->name('usuario.index');
    Route::get('/create', [UserController::class, 'create']) -> name('usuario.create');
    Route::post('/', [UserController::class, 'store'])->name('usuario.store');
    Route::get('/{id}', [UserController::class, 'show'])->name('usuario.show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('usuario.update');
    Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('usuario.destroy');

});

Route::group(['prefix'=>'producto'], function(){

    Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('/create', [ProductoController::class, 'create']) -> name('producto.create');
    Route::post('/', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('/{id}', [ProductoController::class, 'show'])->name('producto.show');
    Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update');
    Route::get('/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');

});

Route::group(['prefix'=>'tipo_producto'], function(){

    Route::get('/', [TipoProductoController::class, 'index'])->name('tipo_producto.index');
    Route::get('/create', [TipoProductoController::class, 'create']) -> name('tipo_producto.create');
    Route::post('/', [TipoProductoController::class, 'store'])->name('tipo_producto.store');
    Route::get('/{id}', [TipoProductoController::class, 'show'])->name('tipo_producto.show');
    Route::get('/{id}/edit', [TipoProductoController::class, 'edit'])->name('tipo_producto.edit');
    Route::put('/{id}', [TipoProductoController::class, 'update'])->name('tipo_producto.update');
    Route::get('/{id}/destroy', [TipoProductoController::class, 'destroy'])->name('tipo_producto.destroy');

});


