<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;
    public function definition(): array
    {
        //Definir la estructura de la tabla
        return [
            'brand' => fake()->words(5, true),
            'model' => fake()->words(5, true),
            'year' => fake()->year(),
            'type' => fake()->randomElement(['car', 'truck', 'motorcycle']),
            'price' => fake()->randomFloat(2, 1000, 100000),
            'description' => fake()->sentence(),
            'is_available' => fake()->boolean()
        ];
    }
}
