<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $pes = Pesan::with('pengguna', 'menu')->get();
        $pes = $pes[0];
        return view('admin_pesanan', compact('pes', 'user'));
    }

    public function pdf()
    {
        $pes = Pesan::with('pengguna')->where('status', '=', 2)->orWhere('status', '=', 3)->get();
        $pes = Pdf::loadview('laporan', ['pes' => $pes]);
        return $pes->download('laporan-pesanan.pdf');
    }

    public function laporan()
    {
        $pes = Pesan::all();

        return view('laporan', compact('pes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
