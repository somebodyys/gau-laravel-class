<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\Users\CreateUserAction;
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
Route::post('/register', CreateUserAction::class);

Route::middleware('auth:sanctum')->group(function (){

});



Route::group(['prefix' => '/planets'], function (){
    Route::post('/', [PlanetController::class, 'store']);
    Route::post('/travel', [PlanetController::class, 'travel']);
});

Route::get('/hello', function (){
    return [
        'response' => 'Hello Tornike!'
    ];
});

