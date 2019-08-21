<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userAdmin_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar usuario administrador por defecto
        DB::table('users')->insert(array(
            'name'=> 'Admin',
            'username'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=>bcrypt('Administrador'),
            'city'=> 'Bogotá',
            'profile'=> 'Administrador'
        ));


    }
}
