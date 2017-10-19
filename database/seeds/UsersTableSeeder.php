<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::forceCreate([
            'email'    => 'stephane@gautrin.fr',
            'name' => 'Stephane Gautrin',
            'password' => '',
        ]);
    }
}
