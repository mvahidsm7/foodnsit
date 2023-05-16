<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pes = Pesan::all();
        return view('admin_pesanan', compact('pes'));
    }

    public function pdf()
    {
        $pes = Pesan::all();
 
    	$pes = Pdf::loadview('laporan', ['pes' =>$pes]);
        // $pes->setPaper('A4', 'landscape');
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
