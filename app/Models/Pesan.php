<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    // protected $primaryKey = 'no_pes';
    protected $fillable = ['id_user','no_meja', 'tanggal', 'jam'];

    public function user(){
        return $this->hasMany(User::class, 'id_user', 'id_user');
    }
    public function menu(){
        return $this->hasMany(Menu::class, 'id_menu', 'id_menu');
    }
}
