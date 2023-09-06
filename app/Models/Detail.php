<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'det_pes';

    protected $fillable = ['kd_pes', 'id_menu', 'qty', 'harga'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }
}
