<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $brand = Brand::create($data);

        return [
            'id' => $brand->id,
            'name' => $brand->name,
            'description' => $brand->description,
            'created_at' => $brand->created_at,
            'updated_at' => $brand->updated_at
        ];
    }

    public function createAndGetFakeBrand(){
        $brands = Brand::factory(10)->create();

        return [
            'brand' => $brands
        ];
    }

    public function attachCars(Brand $brand){
        $cars = Car::factory(15)->create([
            'brand_id' => $brand->id
        ]);

        return [
            'status' => 'okay!'
        ];
    }
}
