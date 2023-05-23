<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BayarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index($no_pes, Request $request)
    {
        $pes = Pesan::find($no_pes);
        $menu = Menu::find($pes->id_menu);
        $harga = Menu::join('kategori', 'menu.kategori', '=', 'kategori.id_kategori')
            ->select('kategori.harga')
            ->where('menu.id_menu', '=', $pes->id_menu)
            ->get();
        $meja = Meja::find($pes->no_meja);
        // dd($meja);
        if ($menu == true) {
            $men = $harga[0]->harga;
            return view('bayar', compact('pes', 'men', 'tot', 'menu'));
            $tot = $men;
        }
        elseif ($meja == true) {
            $mej = $meja->harga;
            $tot = $mej;
            return view('bayar', compact('pes', 'mej', 'tot', 'menu'));
        }
        else {
            $men = $harga[0]->harga;
            $mej = $meja->harga;
            $tot = $mej + $men;
            return view('bayar', compact('pes', 'mej', 'men', 'tot', 'menu'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($no_pes, Request $request)
    {
        $pes = Pesan::find($no_pes);
        $harga = Menu::join('kategori', 'menu.kategori', '=', 'kategori.id_kategori')
            ->select('kategori.harga')
            ->where('menu.id_menu', '=', $pes->id_menu)
            ->get();
        // dd($pes);
        $bayar = new Bayar;
        $bayar->id_user = Auth::user()->id_user;
        $bayar->no_meja = $pes->no_meja;
        $bayar->id_menu = $pes->id_menu;
        $bayar->total = $harga[0]->harga;
        DB::table('pesan')->where('no_pes', $pes->no_pes)->update(array('status' => true));
        DB::table('meja')->where('no_meja', $pes->no_meja)->update(array('status' => 'dipesan'));
        $bayar->save();
        return redirect('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBayarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bayar $bayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bayar $bayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBayarRequest $request, Bayar $bayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bayar $bayar)
    {
        //
    }
}
