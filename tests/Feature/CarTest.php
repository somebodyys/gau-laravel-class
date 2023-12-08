<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\User;
use Tests\TestCase;

class CarTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_can_buy_a_car(): void
    {
        $car = Car::factory()->create();
        $user = User::factory()->create();

        $response = $this->postJson("/api/cars/$car->id/users/$user->id");

        $response->assertOk()
            ->assertExactJson([
                'status' => true
            ]);

        $this->assertDatabaseHas('car_user', [
            'user_id' => $user->id,
            'car_id' => $car->id
        ]);
    }

    public function test_it_can_get_list_of_cars(){
        $response = $this->getJson('/api/cars');

        $response->assertOk()
            ->assertJsonStructure([
                'cars' => [
                    '*' => [
                        'id',
                        'model',
                        'color',
                        'price',
                        'brand' => [
                            'id',
                            'name',
                            'description'
                        ]
                    ]
                ]
            ]);
    }
}
