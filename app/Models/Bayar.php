<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    use HasFactory;
    protected $table = 'bayar';
    protected $primaryKey = 'no_pembayaran';
    protected $fillable = [''];
}