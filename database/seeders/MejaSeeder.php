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
            "no_meja" => "MJ001",
            "kapasitas" => "2"
        ],
        Meja::create([
            "no_meja" => "MJ002",
            "kapasitas" => "2"
        ]),
        Meja::create([
            "no_meja" => "MJ003",
            "kapasitas" => "4"
        ]),
        Meja::create([
            "no_meja" => "MJ004",
            "kapasitas" => "4"
        ]),
        Meja::create([
            "no_meja" => "MJ005",
            "kapasitas" => "6"
        ]),
        Meja::create([
            "no_meja" => "MJ006",
            "kapasitas" => "6"
        ])
    );
    }
}
