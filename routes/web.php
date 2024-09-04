<?php

use App\Http\Controllers\FormularioPQRSController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/formulario-pqrs', function () {
    return view('formulariopqrs');
})->name('formulario.pqrs');

Route::post('/enviar-pqrs', [FormularioPQRSController::class, 'enviarpqrs'])->name('enviar.pqrs');

