<?php

namespace App\Http\Controllers;

use App\classes\Planet;
use App\Http\Requests\StorePlanetRequest;
use App\Notifications\PlanetCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PlanetController extends Controller
{

    public function store(StorePlanetRequest $request){
        $data = $request->validated();

        $planet = new Planet(
            $data['name'],
            $data['diameter'],
            $data['description'],
            $data['atmosphere'],
            $data['minerals'],
            $data['email']
        );

        $planet->notify(
            new PlanetCreatedNotification()
        );

        return [
            'planet' => [
                'name' => $data['name'],
                'diameter' => $data['diameter'],
                'description' => $data['description'],
                'atmosphere' => $data['atmosphere'],
                'minerals' => $data['minerals'],
                'email' => $data['email']
            ]
        ];
    }

    public function travel(Request $request){
        $planet = $request->get('planet');

        return [
            'response' => "I can travel to the $planet"
        ];
    }
}
