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
    }
}
