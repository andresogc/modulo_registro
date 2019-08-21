<?php

use Illuminate\Database\Seeder;

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
            'password'=>'Administrador',
            'city'=> 'Bogotá',
            'profile'=> 'Administrador'
        ));


    }
}
