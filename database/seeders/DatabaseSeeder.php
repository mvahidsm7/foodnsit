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
                "id_menu" => "MN001",
                "nama" => "Paket Makan Bareng 1",
                "gambar" => "assets\img\paket4.jpg",
                "deskripsi" => "sashimi,sushi roll,aburi salmon,namon belly",
                "kategori" => 1,
                "harga" => "100000"
            ],
            Menu::create([
                "id_menu" => "MN002",
                "nama" => "Paket Makan Bareng 2",
                "gambar" => "assets\img\paket5.jpg",
                "deskripsi" => "Ayam Semur,beef slice asam manis,sambal jeruk,oseng toge,Salad",
                "kategori" => 1,
                "harga" => 25000
            ]),
            Menu::create([
                "id_menu" => "MN003",
                "nama" => "Paket Makan Bareng 3",
                "gambar" => "assets\img\paket3.jpg",
                "deskripsi" => "Nasi Goreng katsu+telor,Chicken Katsu ,Nasi Beef Asam Manis,Salad,Saus BBQ,Pudding Matcha",
                "kategori" => 1,
                "harga" => 15000
            ]),
            Menu::create([
                "id_menu" => "MN004",
                "nama" => "Paket Ngemil",
                "gambar" => "assets\img\paket1.jpg",
                "deskripsi" => "Macam Macam donat: choco cookies,greentea,cheeses,choclate cheese",
                "kategori" => 3,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN005",
                "nama" => "Paket Anti Haus",
                "gambar" => "assets\img\paket1.jpg",
                "deskripsi" => "Minuman segar : Jus Jeruk, Jus Alpukat, Jus Mangga",
                "kategori" => 1,
                "harga" => 30000
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
    }
}
