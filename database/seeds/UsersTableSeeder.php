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
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'type' => 'admin'
        ]);
        App\User::create([
            'name' => 'john',
            'email' => 'user@gmail.com',
            'password' => bcrypt('doe')
        ]);
    }
}
