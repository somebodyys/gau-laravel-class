<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlanetTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_travels_to_planet(): void
    {
        $planet = 'Moon';

        $response = $this->postJson('/api/planets/travel', [
            'planet' => $planet
        ]);

        $response->assertStatus(200)
            ->assertExactJson([
                'response' => "I can travel to the $planet"
            ]);
    }

    public function test_it_stores_planet(){
        $planetData = [
            'name' => 'Earth',
            'diameter' => '64000',
            'description' => 'This is earth',
            'atmosphere' => true,
            'minerals' => [
                [
                    'name' => 'Manganum',
                    'code' => 98
                ],
                [
                    'name' => 'Water',
                    'code' => 256
                ],
                [
                    'name' => 'gold'
                ]
            ]
        ];

        $response = $this->postJson('/api/planets', $planetData);

        $response->assertOk()
            ->assertJsonStructure([
                'planet' => [
                    'name',
                    'diameter',
                    'description',
                    'atmosphere',
                    'minerals',
                    'email'
                ]
            ]);

    }
}
