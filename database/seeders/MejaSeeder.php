<?php

namespace Database\Seeders;

use App\Models\Meja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meja::create([
            "kapasitas" => "2"
        ],
        Meja::create([
            "kapasitas" => "2"
        ]),
        Meja::create([
            "kapasitas" => "2"
        ])
    );
    }
}
