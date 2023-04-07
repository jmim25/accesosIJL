<?php

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
    return view('welcome');
    //redirect('/login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', function() {
//    return view('home');
//})->name('home')->middleware('auth');


Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/accesos', function() {
        $accesos = \App\Models\Acceso::all();

        $heads = [
            'id',
            'nombre',
            'area',
            'descripcion',
        ];

        return view('accesos_lista', compact('accesos', 'heads'));
    });

    Route::get('/accesos/create', function() {
        return view('accesos_create');
    });



});
