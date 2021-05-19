<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;

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

Route::get('empresa', function () {
    return view('empresa');
})->name("empresa");
Route::get('/', function () {
    return view('acceso');
})->name("acceso");
Route::resource('factura',FacturaController::class);
Route::resource('cliente',ClienteController::class);
Route::resource('empleado',EmpleadoController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
