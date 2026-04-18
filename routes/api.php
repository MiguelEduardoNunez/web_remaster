<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/mi-ruta-geofeed.csv', function () {

    $path = public_path('archivos/cnet-geofeed.csv');



    if (!File::exists($path)) {

        abort(404);

    }



    $file = File::get($path);

   

    return Response::make($file, 200, [

        'Content-Type' => 'text/plain', // Esto hace que el navegador lo muestre como texto

    ]);

});