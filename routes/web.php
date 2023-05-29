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

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/', [App\Http\Controllers\AbamapController::class, 'inicio'])->name('inicio');
Route::get('/productos-servicios', [App\Http\Controllers\AbamapController::class, 'productosServicios'])->name('producto.servicio');
Route::get('/contacto', [App\Http\Controllers\AbamapController::class, 'contacto'])->name('contacto');
Route::post('/send-email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.mail');
Route::get('/avisopriv', [App\Http\Controllers\AbamapController::class, 'avisopriv'])->name('avisopriv');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
