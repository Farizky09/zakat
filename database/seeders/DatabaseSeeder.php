<?php

namespace Database\Seeders;
use Database\Seeders\UserSeeder;
use Database\Seeders\ZakatSeeder;
use Database\Seeders\StockSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
$this->call(UserSeeder::class);
$this->call(ZakatSeeder::class);
$this->call(StockSeeder::class);
    }
}
