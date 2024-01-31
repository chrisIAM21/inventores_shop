<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Mono',
            'color' => 'Blanco',
            'stock' => 40,
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Dragón',
            'color' => 'Rojo',
            'stock' => 20,
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Tigre',
            'color' => 'Amarillo',
            'stock' => 30,
        ]);

        $producto = new Producto();
        $producto->nombre = 'León';
        $producto->color = 'Amarillo';
        $producto->stock = 10;
        $producto->save();

        Producto::factory(20)->create();
    }
}