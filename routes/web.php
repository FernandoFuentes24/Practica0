<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('inicio');
})->name('home');

Route::get('/conocenos', function () { // RUTAS CON VISTAS ESTATICAS
    return view('conocenos');
})->name('about');
                                                     
Route::get('/noticias', function(){
    return view('noticias');
})->name('news');

Route::view('/vinos', 'vinos')->name('wines');
Route::view('/comidas', 'comidas')->name('foods');
Route::view('/jugos', 'jugos')->name('juices');
Route::view('/frapes', 'frapes')->name('fraps');


Route::view('/contactanos', 'contactanos')->name('contact');

Route::post('/contactanos',[ClientController::class, 'store']);



//definimos la ruta / que sera en el navegador, luego la vista que queremos que se muestre 
//y por ultimo el nombre de la ruta