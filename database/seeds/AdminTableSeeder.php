<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'name' => 'Admin',
           'email' => 'admin@campus.com',
           'role' => 'admin',
           'password' => bcrypt('password'),
        ]);

        \App\User::create([
            'name' => 'SubAdmin',
            'email' => 'subadmin@campus.com',
            'role' => 'subAdmin',
            'password' => bcrypt('password'),
        ]);
    }
}
