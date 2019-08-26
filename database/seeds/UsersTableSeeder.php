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
        // checks the user by email, and if it doesn’t exist – creates the record,
        // filling the extra fields with the array in the second parameter.
        \App\User::firstOrCreate(
            [
                'email'    => env('DEFAULT_ADMIN_EMAIL', 'stephane@gautrin.fr')
            ],
            [
                'name' => 'Stephane Gautrin',
                'password' => '',
            ]
        );
    }
}
