<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Database\Seeders\ReservasiSeeder;
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
    public function index($kd_pes, Request $request)
    {
        $user = Auth::user();
        $pes = Pesan::all()->where('kd_pes', '=', $kd_pes);
        $pes = $pes[0];
        $menu = Menu::all()->where('id_menu', '=', $pes->id_menu);
        $menu = $menu[0];
        // dd($men);
        if ($menu == false) {
            $mej = 50000;
            $tot = $mej;
        } elseif ($pes->no_meja == false) {
            $men = $menu->harga;
            $tot = $men;
        } else {
            $mej = 50000;
            $men = $menu->harga;
            $tot = $mej + $men;
        }
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pes->kd_pes,
                'gross_amount' => $tot,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
            ),
        );
        $char = '01234567890';
        $numb = strlen($char);
        $length = 2;
        $kode = '';
        while (strlen($kode) < $length) {
            $position = rand(0, 10);
            $chara = $char[$position];
            $kode = $kode . $chara;
        }
        $code = date('now') . $kode;
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $mej = 50000;
        $men = $menu->harga;
        $tot = $mej + $men;
        $bayar = new Bayar;
        $bayar->user = Auth::user()->id;
        $bayar->kd_pes = $pes->kd_pes;
        $bayar->no_pembayaran = $code;
        $bayar->total = $menu->harga;
        DB::table('pesan')->where('kd_pes', $pes->kd_pes)->update(array('status' => true));
        DB::table('meja')->where('no_meja', $pes->no_meja)->update(array('status' => 'dipesan'));
        $bayar->save();
        return view('bayar', compact('snapToken', 'pes', 'mej', 'men', 'tot', 'menu'));
        return redirect('profil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kd_pes, Request $request)
    {
        $pes = Pesan::find($kd_pes);
        $bayar = new Bayar;
        $bayar->id_user = Auth::user()->id_user;
        $bayar->no_meja = $pes->no_meja;
        $bayar->id_menu = $pes->id_menu;
        $bayar->total = $pes[0]->harga;
        DB::table('pesan')->where('kd_pes', $pes->kd_pes)->update(array('status' => 2));
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
