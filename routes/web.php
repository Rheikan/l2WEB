<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');


Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'noticias'])->name('noticias');
Route::get('/cuentas', [App\Http\Controllers\HomeController::class, 'cuentas'])->name('cuentas');
Route::get('/descargas', [App\Http\Controllers\HomeController::class, 'descargas'])->name('descargas');
Route::get('/redes', [App\Http\Controllers\HomeController::class, 'redes'])->name('redes');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');
Route::post('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::post('/passchange', [App\Http\Controllers\HomeController::class, 'passchange'])->name('passchange');
Route::get('donaciones', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');

Route::get('items/{obj}', [App\Http\Controllers\HomeController::class, 'items'])->name('items');
Route::post('token/', [App\Http\Controllers\HomeController::class, 'obtenertoken'])->name('otoken');
Route::get('newpost', [App\Http\Controllers\HomeController::class, 'newpost'])->name('newpost');
Route::post('post/', [App\Http\Controllers\HomeController::class, 'post'])->name('post');
Route::get('nueva-cuenta/', [App\Http\Controllers\HomeController::class, 'nuevacuenta'])->name('nuevacuenta');
Route::post('crear/', [App\Http\Controllers\HomeController::class, 'crearcuenta'])->name('crearcuenta');
