<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Testing extends Controller
{
    public function index()
    {
        $char = '01234567890';
        $numb = strlen($char);
        $length = 4;
        $kode = '';
        while (strlen($kode) < $length) {
            $position = rand(0, 10);
            $chara = $char[$position];
            $kode = $kode.$chara;
        }
        $code = date('now').$kode;
        dd(date('now').$kode);
        // return view('test');
    }


}
