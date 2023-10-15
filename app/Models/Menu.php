<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = ['id_menu', 'nama', 'gambar', 'deskripsi', 'harga', 'kategori'];
    // protected $primaryKey = 'id_menu';

    public function harga(){
        return $this->belongsTo(Kategori::class);
    }
}
