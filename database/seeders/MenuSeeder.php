<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            "nama" => "Lobster Baked",
            "gambar" => "assets\img\products\makanan1.png",
            "deskripsi" => "Lobster yang dibakar dengan saus keju",
            "kategori" => 3,
            "harga" => 50000
        ],
        Menu::create([
            "nama" => "Gelato",
            "gambar" => "assets\img\products\dessert1.jpg",
            "deskripsi" => "Gelato yang manis dan segar",
            "kategori" => 2,
            "harga" => 25000
        ]),
        Menu::create([
            "nama" => "Iced Cinnamon Rolls",
            "gambar" => "assets\img\products\minuman1.jpg",
            "deskripsi" => "Iced, Cinnamon, Butter, Milk, and Vanilla",
            "kategori" => 1,
            "harga" => 15000
        ]),
        Menu::create([
            "nama" => "Iced Coffee Latte",
            "gambar" => "assets\img\products\minuman2.jpg",
            "deskripsi" => "Racikan espresso dari kopi terbaik robusta Lampung",
            "kategori" => 1,
            "harga" => 15000
        ]),
        Menu::create([
            "nama" => "Kimchi Fried Rice",
            "gambar" => "assets\img\products\makanan2.jpg",
            "deskripsi" => "Hidangan populer di Korea Utara",
            "kategori" => 3,
            "harga" => 30000
        ]),
        Menu::create([
            "nama" => "Blueberry Cake",
            "gambar" => "assets\img\products\dessert2.jpg",
            "deskripsi" => "Kek lembut dengan selai Blueberry",
            "kategori" => 2,
            "harga" => 20000
        ])
    );
    }
}
