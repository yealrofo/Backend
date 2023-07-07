<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Api\ContactoController;
use App\http\Controllers;




Route::get('/pedir',[ContactoController::Class,'read']);

Route::post("/crear",[ContactoController::class,'create']);

Route::put("/cargar",[ContactoController::class,'update']);

Route::delete("/borrar",[ContactoController::class,'delete']);





Route::get("/saludo/abc",function (Request $request) {
    
    $message = ['mensaje' => "Hola Mundo !"];

    return response()->json($message);

});

Route::get("/saludo",function (Request $request) {
    $message = ['mensaje' => "hola Yesid R."];
    return response()->json($message); 
});

Route::post("/futbolista",function (Request $request) {
    $message = ['jugador' => "Radamel Falcao Garcia :)"];
    return response()->json($message); 
});
Route::put("/libertadores",function (Request $request) {
    $message = [
        'Campeón 2022' => "Flamengo",
        'Campeón 2021' => "Palmeiras",
        'Campeón 2020' => "Palmeiras"
        ];
    return response()->json($message); 
});
