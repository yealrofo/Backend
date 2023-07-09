<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\interesado;

class ContactoController extends Controller

{
    public function read(Request $request){

        $useread = new interesado();

        $data = $useread->all();
        return  response()->json($data,200);
    }

    public function create(Request $request){

        $creation = new interesado();

        $creation->name = $request->input("name");
        $creation->empresa = $request->input("empresa");
        $creation->cargo = $request->input("cargo");
        $creation->vacante = $request->input("vacante");
        $creation->correo = $request->input("correo");
        $creation->telefono = $request->input("telefono");

        $creation->save();

        $message=["message" => "Registro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
     
    }

    public function update(Request $request){


        $IDuser = $request->query("id");

        $usuario = new interesado();

        $cambioUser = $usuario->find($IDuser);

        $cambioUser->name = $request->input("name");
        $cambioUser->empresa = $request->input("empresa");
        $cambioUser->cargo = $request->input("cargo");
        $cambioUser->vacante = $request->input("vacante");
        $cambioUser->correo = $request->input("correo");
        $cambioUser->telefono = $request->input("telefono");


        $cambioUser->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "IDuser" => $request->query("id"),
            "nameUSER"=>$cambioUser->name
        ];

        return $message;
    }

    public function delete(Request $request){

        $idinteresado = $request->query("id");

        $contacto = new interesado();

        $contactoParticular = $contacto->find($idinteresado);

        $contactoParticular->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idinteresado" => $request->query("id"),
        ];

        return $message;
    }

}