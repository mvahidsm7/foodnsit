<?php

namespace Database\Seeders;

use App\Models\Kategori as ModelsKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsKategori::create([
            "kategori" => "makanan",
            "harga" => 50000
        ],
        ModelsKategori::create([
            "kategori" => "minuman",
            "harga" => 20000
        ]),
        ModelsKategori::create([
            "kategori" => "dessert",
            "harga" => 15000
        ]));
    }
}
