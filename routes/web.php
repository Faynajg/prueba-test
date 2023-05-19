<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cuestion;
use App\Http\Controllers\Controller;

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
    $cuestiones = Cuestion::all();
    return view('listado', ['cuestiones' => $cuestiones]);

});

Route::get('/crear-pregunta', function () {
    return view('crear-pregunta');
});

Route::get('/text', function () {
    $cuestion= new Cuestion ();
    $cuestion->enunciado="abcd";
    $cuestion->estado="VISIBLE";
    $cuestion->save();
});


Route::post('/cuestiones', [Controller::class, 'callApiStoreCuestion']);



