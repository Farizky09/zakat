<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt('1')
        ]);
        User::create([
            'name' => 'Farizky',
            'email' => 'qwerty123@gmail.com',
            'role' => 'amil',
            'password' => bcrypt('1')
        ]);

    }
}
