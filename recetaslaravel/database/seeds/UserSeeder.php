<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear registro con Modelo
        $user = User::create([
            'name' => 'Emm',
            'email' => 'emm@emm.com',
            'url' => 'https://emm-dev.com',
            'password' => Hash::make('12345678'),
        ]);
        /* $user->perfil()->create(); */

        $user2 = User::create([
            'name' => 'Mika',
            'email' => 'mika@mika.com',
            'url' => 'https://mika-cat.com',
            'password' => Hash::make('12345678'),
        ]);
        /* $user2->perfil()->create(); */

        //Crear registro sin Modelo
        /* DB::table('users')->insert([
            'name' => 'Emm',
            'email' => 'emm@emm.com',
            'url' => 'https://emm-dev.com',
            'password' => Hash::make('12345678'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); */
    }
}
