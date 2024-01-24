<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archivo>
 */
class ArchivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // en este caso el archivo se crea en la carpeta app/public/storage/archivos
        $archivo = $this->faker->image(storage_path('app/public/archivos'), 640, 480, null, false);

        $ruta = 'archivos/' . $archivo;
        return [
            'producto_id' => $this->faker->numberBetween(1, 10),
            'hash' => $ruta,
            'nombre' => pathinfo($archivo, PATHINFO_FILENAME),
            'extension' => pathinfo($archivo, PATHINFO_EXTENSION),
            'mime' => mime_content_type(storage_path('app/public/' . $ruta)),
        ];
    }
}
