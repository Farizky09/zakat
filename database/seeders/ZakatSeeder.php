<?php

namespace Database\Seeders;
use App\Models\Zakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zakat::create([
            'nama_zakat' => 'Zakat Fitrah',

        ]);
        Zakat::create([
            'nama_zakat' => 'Zakat Mal',

        ]);
    }
}
