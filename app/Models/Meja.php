<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    protected $table = 'meja';
    // protected $primaryKey = 'no_meja';
    protected $fillable = ['kapasitas', 'status', 'no_meja'];
}
