<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // kategori
        Kategori::create(
            [
                "kategori" => "makanan",
            ],
            Kategori::create([
                "kategori" => "minuman",
            ]),
            Kategori::create([
                "kategori" => "dessert",
            ])
        );

        // menu
        Menu::create(
            [
                "id_menu" => "MN1",
                "nama" => "smoothcake strobery",
                "gambar" => "assets\img\products\dessert.png",
                "deskripsi" => "Cake dengan selai stroberi yang maniss'",
                "kategori" => 3,
                "harga" => "100000"
            ],
            Menu::create([
                "id_menu" => "MN2",
                "nama" => "Lobster baked ",
                "gambar" => "assets\img\products\makanan1.png",
                "deskripsi" => "Daging lobster yang lebut dibaluri bumbu khas rempah",
                "kategori" => 1,
                "harga" => 25000
            ]),
            Menu::create([
                "id_menu" => "MN3",
                "nama" => "rice gochujang",
                "gambar" => "assets\img\products\makanan2.jpg ",
                "deskripsi" => "Nasi shirataki dicampur dengan saus gochujang",
                "kategori" => 1,
                "harga" => 15000
            ]),
            Menu::create([
                "id_menu" => "MN4",
                "nama" => "donut's  ",
                "gambar" => "assets\img\paket1.jpg",
                "deskripsi" => "donat yang sangat lembut dan manis dengan berbagai macam rasa",
                "kategori" => 3,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN5",
                "nama" => "ice coffee latte",
                "gambar" => "assets\img\products\minuman1.jpg",
                "deskripsi" => "Ice coffee latte dibuat dengan bubuk kopi inport dari korea",
                "kategori" => 2,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN6",
                "nama" => "Ramen Shiburi",
                "gambar" => "assets\img\products\makanan3.jpg",
                "deskripsi" => "Mie yang di adoni dengan tepung jepang sehingga membuat mie terasa lembut ketika dimakan",
                "kategori" => 1,
                "harga" => 50000
            ]),
            Menu::create([
                "id_menu" => "MN7",
                "nama" => "Milky coffee",
                "gambar" => "assets\img\products\minuman3.jpg",
                "deskripsi" => "kopi dengan susu almond",
                "kategori" => 2,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN8",
                "nama" => "Yogurth Sweddish",
                "gambar" => "assets\img\products\dessert3.jpg",
                "deskripsi" => "yogurth blubbery yang sweet",
                "kategori" => 2,
                "harga" => 45000
            ]),
            Menu::create([
                "id_menu" => "MN9",
                "nama" => "Maccaron",
                "gambar" => "assets\img\products\dessert4.jpg",
                "deskripsi" => "Maccaron dengan berbagai rasa",
                "kategori" => 3,
                "harga" => 25000
            ]),
        );

        // meja
        Meja::create(
            [
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

        // admin
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@food.com',
                'password' => Hash::make('admin123'),
            ]
        );
        User::create(
            [
                'name' => 'vahid',
                'email' => 'vahid@gmail.com',
                'password' => Hash::make('vahid123'),
            ]
        );
    }
}
