<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = Brand::factory(10)->create();

        foreach ($brands as $brand) {
            $user = User::factory()->create();

            $cars = Car::factory(15)->create([
                'brand_id' => $brand->id
            ]);

            $user->cars()->sync($cars);
        }
    }
}
