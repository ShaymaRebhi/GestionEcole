<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
        ]);
        User::factory()->create([
            'name'      => 'shayma',
            'username'      => 'shayma',
            'email'     => 'shayma@gmail.com',
            'password'  => bcrypt('esprit'),
        ]);
    }
}
