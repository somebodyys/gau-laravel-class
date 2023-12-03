<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyCarRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function buy(BuyCarRequest $request, Car $car, User $user){

        $user->cars()->attach($car);

        return [
            'status' => true
        ];
    }
}
