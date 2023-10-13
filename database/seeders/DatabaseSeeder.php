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
        Kategori::create([
            "kategori" => "makanan",
        ]);
        Kategori::create([
            "kategori" => "minuman",
        ]);
        Kategori::create([
            "kategori" => "dessert",
        ]);

        // menu
        Menu::create([
            "id_menu" => "MN1",
            "nama" => "smoothcake strobery",
            "gambar" => "assets\img\products\dessert.png",
            "deskripsi" => "Cake dengan selai stroberi yang maniss'",
            "kategori" => 3,
            "harga" => 20000
        ]);
        Menu::create([
            "id_menu" => "MN2",
            "nama" => "Lobster baked ",
            "gambar" => "assets\img\products\makanan1.png",
            "deskripsi" => "Daging lobster yang lebut dibaluri bumbu khas rempah",
            "kategori" => 1,
            "harga" => 25000
        ]);
        Menu::create([
            "id_menu" => "MN3",
            "nama" => "rice gochujang",
            "gambar" => "assets\img\products\makanan2.jpg ",
            "deskripsi" => "Nasi shirataki dicampur dengan saus gochujang",
            "kategori" => 1,
            "harga" => 15000
        ]);
        Menu::create([
            "id_menu" => "MN4",
            "nama" => "donut's  ",
            "gambar" => "assets\img\paket1.jpg",
            "deskripsi" => "donat yang sangat lembut dan manis dengan berbagai macam rasa",
            "kategori" => 3,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN5",
            "nama" => "ice coffee latte",
            "gambar" => "assets\img\products\minuman1.jpg",
            "deskripsi" => "Ice coffee latte dibuat dengan bubuk kopi inport dari korea",
            "kategori" => 2,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN6",
            "nama" => "Ramen Shiburi",
            "gambar" => "assets\img\products\makanan3.jpg",
            "deskripsi" => "Mie yang di adoni dengan tepung jepang sehingga membuat mie terasa lembut ketika dimakan",
            "kategori" => 1,
            "harga" => 50000
        ]);
        Menu::create([
            "id_menu" => "MN7",
            "nama" => "Milky coffee",
            "gambar" => "assets\img\products\minuman3.jpg",
            "deskripsi" => "kopi dengan susu almond",
            "kategori" => 2,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN8",
            "nama" => "Yogurth Sweddish",
            "gambar" => "assets\img\products\dessert3.jpg",
            "deskripsi" => "yogurth blubbery yang sweet",
            "kategori" => 2,
            "harga" => 45000
        ]);
        Menu::create([
            "id_menu" => "MN9",
            "nama" => "Maccaron",
            "gambar" => "assets\img\products\dessert4.jpg",
            "deskripsi" => "Maccaron dengan berbagai rasa",
            "kategori" => 3,
            "harga" => 25000
        ]);
        Menu::create([
            "id_menu" => "MN10",
            "nama" => "Bagelend",
            "gambar" => "assets\img\products\dsrt1.png",
            "deskripsi" => "roti bagelend dengan cream cheese",
            "kategori" => 3,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN11",
            "nama" => "Fruit Salad",
            "gambar" => "assets\img\products\dsrt2.png",
            "deskripsi" => "salad dengan buah buahan yang segar dan peeling yang manis",
            "kategori" => 3,
            "harga" => 25000
        ]);
        Menu::create([
            "id_menu" => "MN12",
            "nama" => "Dessert Box",
            "gambar" => "assets\img\products\dsrt3.png",
            "deskripsi" => "cake dengan lumeran selai coklat",
            "kategori" => 3,
            "harga" => 32000
        ]);
        Menu::create([
            "id_menu" => "MN13",
            "nama" => "Waffle Fruit",
            "gambar" => "assets\img\products\dsrt4.png",
            "deskripsi" => "waffle yang lembut dengan buah buahan yang segar",
            "kategori" => 3,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN14",
            "nama" => "Strawberry Pudding",
            "gambar" => "assets\img\products\dsrt5.png",
            "deskripsi" => "pudding dengan fla vanila bercampur dengan buah strawberry",
            "kategori" => 3,
            "harga" => 26000
        ]);
        Menu::create([
            "id_menu" => "MN15",
            "nama" => "Spaghetti Aglio Olio",
            "gambar" => "assets\img\products\mkn1.png",
            "deskripsi" => "mie spaghetti yang yummy dipadukan dengan saus cheese yang gurih",
            "kategori" => 1,
            "harga" => 34000
        ]);
        Menu::create([
            "id_menu" => "MN16",
            "nama" => "Chicken Cordon Blue",
            "gambar" => "assets\img\products\mkn2.png",
            "deskripsi" => "ayam yang sangat lembut serta gurih",
            "kategori" => 1,
            "harga" => 35000
        ]);
        Menu::create([
            "id_menu" => "MN17",
            "nama" => "Macaroni Pasta",
            "gambar" => "assets\img\products\mkn3.png",
            "deskripsi" => "makaroni dengan pasta bolognese",
            "kategori" => 1,
            "harga" => 34000
        ]);
        Menu::create([
            "id_menu" => "MN18",
            "nama" => "Fried Fries",
            "gambar" => "assets\img\products\mkn4.png",
            "deskripsi" => "kentang goreng yang digoreng kering dann dibumbuin gurih",
            "kategori" => 1,
            "harga" => 28000
        ]);
        Menu::create([
            "id_menu" => "MN19",
            "nama" => "Beef Burger",
            "gambar" => "assets\img\products\mkn5.png",
            "deskripsi" => "beef yang juicy dan roti burger yang gurih",
            "kategori" => 1,
            "harga" => 30000
        ]);
        Menu::create([
            "id_menu" => "MN20",
            "nama" => "Green Salad",
            "gambar" => "assets\img\products\mkn6.png",
            "deskripsi" => "sayuran yang segar",
            "kategori" => 1,
            "harga" =>25000
        ]);
        Menu::create([
            "id_menu" => "MN21",
            "nama" => "Boba Brown Sugar",
            "gambar" => "assets\img\products\mnm1.png",
            "deskripsi" => "minuman milk tea dengan tambahan topping boba",
            "kategori" => 2,
            "harga" => 25000
        ]);
        Menu::create([
            "id_menu" => "MN22",
            "nama" => "FNS Coffee",
            "gambar" => "assets\img\products\mnm2.png",
            "deskripsi" => "serbuk kopi khas ala FNS",
            "kategori" => 2,
            "harga" => 26000
        ]);
        Menu::create([
            "id_menu" => "MN23",
            "nama" => "Ice Matcha",
            "gambar" => "assets\img\products\mnm3.png",
            "deskripsi" => "minuman milk dengan serbuk matcha",
            "kategori" => 2,
            "harga" => 30000
        ]);

        // meja
        Meja::create([
            "no_meja" => "MJ1",
            "kapasitas" => 2
        ]);
        Meja::create([
            "no_meja" => "MJ2",
            "kapasitas" => 2
        ]);
        Meja::create([
            "no_meja" => "MJ3",
            "kapasitas" => 4
        ]);
        Meja::create([
            "no_meja" => "MJ4",
            "kapasitas" => 4
        ]);
        Meja::create([
            "no_meja" => "MJ5",
            "kapasitas" => 6
        ]);
        Meja::create([
            "no_meja" => "MJ6",
            "kapasitas" => 6
        ]);

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
                'name' => 'Muhammad Vahid Sumantri',
                'email' => 'mvahidsm7@gmail.com',
                'password' => Hash::make('vahid123'),
            ]
        );
        User::create(
            [
                'name' => 'Fajar Fathurrohman',
                'email' => 'fajarfathur184@gmail.com',
                'password' => Hash::make('fajar123'),
            ]
        );
    }
}
