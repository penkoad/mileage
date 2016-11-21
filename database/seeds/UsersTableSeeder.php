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
        \App\User::create([
            'email'    => 'stephane@gautrin.fr',
            'name' => 'Stephane Gautrin',
            'password' => '$2y$10$lnumBlW9aBA6EQhQdgDdTu6MKyfrMrr68mQ6UHg3BS46cm.bw5L5m'
        ]);
    }
}
