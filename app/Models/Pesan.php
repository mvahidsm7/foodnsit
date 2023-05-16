<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $primaryKey = 'no_pes';
    protected $fillable = ['id_user','no_meja', 'tanggal', 'jam'];
}
