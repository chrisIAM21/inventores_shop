<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->company(),
            'modelo' => $this->faker->words(3, true),
            'color' => $this->faker->safeColorName(),
            'stock' => $this->faker->randomNumber(3),
        ];
    }
}
