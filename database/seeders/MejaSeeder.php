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
            "kapasitas" => "2",
            "harga" => "10000"
        ],
        Meja::create([
            "kapasitas" => "4",
            "harga" => "15000"
        ]),
        Meja::create([
            "kapasitas" => "6",
            "harga" => "20000"
        ])
    );
    }
}
