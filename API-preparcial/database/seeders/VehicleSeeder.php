<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\Category;


class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtiene todos los IDs de las categorías existentes
        $categories = Category::pluck('id');

        // Crea vehículos asignando una categoría válida antes de crear el registro
        Vehicle::factory(10)->make()->each(function ($vehicle) use ($categories) {
            // Asigna una categoría aleatoria
            $vehicle->category_id = $categories->random();
            // Luego guarda el vehículo con la categoría asignada
            $vehicle->save();
        });
    }
}
