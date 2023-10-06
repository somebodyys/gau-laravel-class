<?php

use App\Http\Controllers\MathController;
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

Route::get('/hello', function (){
    return [
        'message' => 'Hello Tornike!'
    ];
});

Route::get('/factorial/{number}', function ($number){
    return [
        'number' => $number
    ];
});

// Group of Math algorithms
Route::group(['prefix' => '/math'], function (){
    Route::get('/factorial/{number}', [MathController::class, 'calculateFactorial']);
    Route::post('/fibonacci', [MathController::class, 'calculateFibonacci']);
});
