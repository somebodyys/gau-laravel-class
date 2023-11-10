<?php

use App\Http\Controllers\PlanetController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => '/planets'], function (){
    Route::post('/', [PlanetController::class, 'store']);
    Route::post('/travel', [PlanetController::class, 'travel']);
});

Route::get('/hello', function (){
    return [
        'response' => 'Hello Tornike!'
    ];
});

