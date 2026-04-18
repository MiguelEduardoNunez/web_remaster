<?php

use App\Http\Controllers\FormularioPQRSController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/formulario-pqrs', function () {
    return view('formulariopqrs');
})->name('formulario.pqrs');

Route::post('/enviar-pqrs', [FormularioPQRSController::class, 'enviarpqrs'])->name('enviar.pqrs');