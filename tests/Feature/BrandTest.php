<?php

namespace Tests\Feature;

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function test_it_creates_and_saves_brands(): void
    {
        $brandData = [
            'name' => $this->faker->name,
            'description' => $this->faker->text
        ];

        $response = $this->postJson('/api/brands', $brandData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'description',
                'created_at',
                'updated_at'
            ]);

        $this->assertDatabaseHas('brands', $brandData);
    }

    public function test_it_created_and_returns_fake_brands(){
        $response = $this->getJson('/api/brands/getFakeBrand');

        $response->assertOk();
    }

    public function test_it_attaches_cars_to_brand(){
        $brand = Brand::factory()->create();

        $response = $this->postJson("/api/brands/$brand->id/attachCars");

        $response->assertOk();
    }
}
