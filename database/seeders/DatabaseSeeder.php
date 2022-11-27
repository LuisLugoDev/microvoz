<?php

namespace Database\Seeders;
use App\Models\tipo_clientes;


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
        tipo_clientes::create([
            'nombre' => 'Admin'
        ]);
        tipo_clientes::create([
            'nombre' => 'User'
        ]);

    }
}
