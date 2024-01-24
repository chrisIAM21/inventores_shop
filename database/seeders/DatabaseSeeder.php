<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Añadir todos los seeders
        $this->call([
            ProductoSeeder::class,
            UserSeeder::class,
            CategoriaSeeder::class,
            CategoriaProductoSeeder::class,
            ArchivoSeeder::class,
        ]);
    }
}
