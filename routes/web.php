<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('notas', function() {
    $notas = DB::table('notas')->get();
    /*[
        'primera nota',
        'segunda nota',
        'tercera nota',
        'cuarta nota',
        'quinta nota',
    ];*/

    return view('notas', ['notas' => $notas]);
});

Route::get('agregar', function() {
    return view('agregar');
});

Route::get('notas/{id}/editar', function ($id){
    $notas = DB::table('notas')
        ->where('id', $id)
        ->first();
        return view('editar', ['notas' => $notas]);
        #return 'Aqui se van a editar las notas' .$id;
})->name('notas.edit');