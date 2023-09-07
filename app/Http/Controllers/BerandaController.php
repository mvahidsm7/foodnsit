<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function Index()
    {
        $user = Auth::user();
        if (Auth::user() == null) {
            $menu = Menu::paginate(3);
            return view('index', compact('user', 'menu'));
        } else {
            if (Auth::user()->email == 'admin@food.com') {
                $pes = Pesan::orderBy('updated_at', 'desc')->get();
                $detail = Detail::with('menu')->get();
                foreach ($detail as $key) {
                    $harga[] = $key->menu->harga;
                    $qty[] = $key->qty;
                }
                $total = 0;
                foreach ($harga as $key => $value) {
                    $total += ($value * $qty[$key]);
                }
                return view('admin.index', compact('pes'));
            } else {
                $menu = Menu::paginate(3);
                return view('index', compact('user', 'menu'));
            }
        }
    }
}
