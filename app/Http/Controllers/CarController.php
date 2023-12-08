<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyCarRequest;
use App\Http\Resources\CarResource;
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

    public function getCars(){
        $cars = Car::with('brand.locations')->where([
            ['color', 'Yellow'],
            ['release_date', '>=', '1994-01-01']
        ])->whereHas('brand', function ($brandLevelQuery){
            $brandLevelQuery->where('name', 'Prof. Raven Bins')
                ->orWhereHas('locations', function ($locationLevelQuery){
                    $locationLevelQuery->where('name', 'Carlos Emmerich');
                });
        })
        ->get();

        return [
            'cars' => CarResource::collection($cars)
        ];
    }
}
