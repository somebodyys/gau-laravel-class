<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->name,
            'release_date' => $this->faker->date,
            'description' => $this->faker->text,
            'color' => $this->faker->colorName,
            'price' => $this->faker->numberBetween(10000, 500000),
            'brand_id' => Brand::inRandomOrder()->first()->id
        ];
    }
}
