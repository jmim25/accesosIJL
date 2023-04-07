<?php

namespace Database\Factories;
//use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acceso>
 */
class AccesoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->text(30),
            'descripcion' => fake()->text(300),
            'area' => fake()->randomElement(['Administracion', 'Primaria', 'Secundaria']),

        ];
    }
}
