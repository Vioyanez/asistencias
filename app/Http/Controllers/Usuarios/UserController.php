<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
class UserController extends Controller
{
    public function ver(){
        //Array de usuarios
            $usuarios= [];
            for($i = 0;$i<10; $i++) { //FOR que genera 10 usuarios
                $usuario = new \stdClass(); //Crear un usuario
                $usuario->nombre = 'Usuario'.$i; //Asignar un nombre
                $usuario->correo = 'usuario'.$i.'@gmail.com'; //Asignar un correo
                $usuarios[]=$usuario; //Agregar el usuario al array
            }

        // dd($usuarios);
        //Retornar la vista con los usuarios
        return view('usuarios.vista', compact('usuarios'));
    }
    public function all(){
        $users = User::all();
        return view('usuarios.users', compact('users'));
    }
}
