<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Mexicana',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida China',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Japonesa',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Taiwanesa',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Argentina',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Brasileña',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Italiana',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Comida Española',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Postres',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Cortes de Carne',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Cortes de Desayunos',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Ensaladas',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

    }
}
