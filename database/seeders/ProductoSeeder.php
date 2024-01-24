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
            'marca' => 'Adidas',
            'modelo' => 'Stan Smith',
            'color' => 'Blanco / Verde',
            'stock' => 40,
        ]);
        DB::table('productos')->insert([
            'marca' => 'Nike',
            'modelo' => 'Blazer Mid 77 EMB',
            'color' => 'Blanco / Naranja',
            'stock' => 30,
        ]);
        DB::table('productos')->insert([
            'marca' => 'Nike',
            'modelo' => 'Revolution 6 Next Nature',
            'color' => 'Negro / Blanco',
            'stock' => 20,
        ]);

        $producto = new Producto();
        $producto->marca = 'Adidas';
        $producto->modelo = 'Forum Low';
        $producto->color = 'Blanco / Azul';
        $producto->stock = '100';
        $producto->save();

        Producto::factory(50)->create();
    }
}