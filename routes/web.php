<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    //URL DE LA RUTA
    '/usuarios/todos',
    //Controlador y metodo
    [UserController::class,'all']
);

Route::get('/hola',function (){
    return 'Hola Mundo';
});

Route::get(
    '/hola/{nombre}',
    function ($nombre){
    return 'Hola '. $nombre;
});
