<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = \App\Models\Categoria::pluck('id');
        $productos = \App\Models\Producto::pluck('id');

        foreach ($productos as $producto) {
            $cantidadCategorias = rand(1, 3); // Número de categorías aleatorio por producto

            $categoriasAleatorias = $categorias->random($cantidadCategorias);

            foreach ($categoriasAleatorias as $categoria) {
                DB::table('categoria_producto')->insert([
                    'categoria_id' => $categoria,
                    'producto_id' => $producto,
                ]);
            }
        }
    }
}
