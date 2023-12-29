<?php

use App\Models\Planet;
use App\Models\User;
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
});

Route::get('/planets', function() {
    $planets = Planet::factory(10)->make();
    $users = User::factory(10)->make();

    return view('space.planets', [
        'planets' => $planets,
        'users' => $users
    ]);
});
