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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route */

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




