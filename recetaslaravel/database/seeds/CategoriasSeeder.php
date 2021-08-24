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
            'nombre' => 'Mexicana',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'China',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Japonesa',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Taiwanesa',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Argentina',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Brasileña',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Italiana',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Española',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Postres',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Cortes',
            'created_at' => date('Y--m-d H:i:s'),
            'updated_at' => date('Y--m-d H:i:s'),
        ]);

        DB::table('categoria_recetas')->insert([
            'nombre' => 'Desayunos',
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
