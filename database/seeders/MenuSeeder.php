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
                "id_menu" => "MN1",
                "nama" => "smoothcake strobery",
                "gambar" => "assets\img\products\dessert.png",
                "deskripsi" => "Cake dengan selai stroberi yang maniss'",
                "kategori" => 2,
                "harga" => "100000"
            ],
            Menu::create([
                "id_menu" => "MN2",
                "nama" => "Lobster baked ",
                "gambar" => "assets\img\products\makanan1.png",
                "deskripsi" => "Daging lobster yang lebut dibaluri bumbu khas rempah",
                "kategori" => 3,
                "harga" => 25000
            ]),
            Menu::create([
                "id_menu" => "MN3",
                "nama" => "rice gochujang",
                "gambar" => "assets\img\products\makanan2.jpg ",
                "deskripsi" => "Nasi shirataki dicampur dengan saus gochujang",
                "kategori" => 3,
                "harga" => 15000
            ]),
            Menu::create([
                "id_menu" => "MN4",
                "nama" => "donut's  ",
                "gambar" => "assets\img\paket1.jpg",
                "deskripsi" => "donat yang sangat lembut dan manis dengan berbagai macam rasa",
                "kategori" => 2,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN5",
                "nama" => "ice coffee latte",
                "gambar" => "assets\img\products\minuman1.jpg",
                "deskripsi" => "Ice coffee latte dibuat dengan bubuk kopi inport dari korea",
                "kategori" => 1,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN6",
                "nama" => "Ramen Shiburi",
                "gambar" => "assets\img\products\makanan3.jpg",
                "deskripsi" => "Mie yang di adoni dengan tepung jepang sehingga membuat mie terasa lembut ketika dimakan",
                "kategori" => 3,
                "harga" => 50000
            ]),
            Menu::create([
                "id_menu" => "MN7",
                "nama" => "Milky coffee",
                "gambar" => "assets\img\products\minuman3.jpg",
                "deskripsi" => "kopi dengan susu almond",
                "kategori" => 1,
                "harga" => 30000
            ]),
            Menu::create([
                "id_menu" => "MN8",
                "nama" => "Yogurth Sweddish",
                "gambar" => "assets\img\products\dessert3.jpg",
                "deskripsi" => "yogurth blubbery yang sweet",
                "kategori" => 3,
                "harga" => 45000
            ]),
            Menu::create([
                "id_menu" => "MN9",
                "nama" => "Maccaron",
                "gambar" => "assets\img\products\dessert4.jpg",
                "deskripsi" => "Maccaron dengan berbagai rasa",
                "kategori" => 2,
                "harga" => 25000
            ]),
            Menu::create([
                "id_menu" => "MN10",
                "nama" => "Bagelend",
                "gambar" => "assets\img\products\tmbdsrt1.png",
                "deskripsi" => "roti bagelend dengan cream cheese",
                "kategori" => 2,
                "harga" => 30000
            ]),
        );
    }
}
