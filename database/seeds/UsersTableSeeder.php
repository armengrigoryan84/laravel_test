<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
