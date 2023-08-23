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
                "nama" => "Paket Makan Bareng 1",
                "gambar" => "assets\img\products\paket4.jpg",
                "deskripsi" => "sashimi,sushi roll,aburi salmon,namon belly",
                "kategori" => 2,
                "harga" => "100000"
            ],
            Menu::create([
                "nama" => "Paket Makan Bareng 2",
                "gambar" => "assets\img\products\paket5.jpg",
                "deskripsi" => "Ayam Semur,beef slice asam manis,sambal jeruk,oseng toge,Salad",
                "kategori" => 1,
                "harga" => 25000
            ]),
            Menu::create([
                "nama" => "Paket Makan Bareng 3",
                "gambar" => "assets\img\products\paket3.jpg",
                "deskripsi" => "Nasi Goreng katsu+telor,Chicken Katsu ,Nasi Beef Asam Manis,Salad,Saus BBQ,Pudding Matcha",
                "kategori" => 1,
                "harga" => 15000
            ]),
            Menu::create([
                "nama" => "Paket Ngemil",
                "gambar" => "assets\img\products\paket1.jpg",
                "deskripsi" => "Macam Macam donat: choco cookies,greentea,cheeses,choclate cheese",
                "kategori" => 3,
                "harga" => 30000
            ]),
        );
    }
}
