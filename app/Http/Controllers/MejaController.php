<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meja = Meja::all();
        return view('meja', compact('meja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-meja');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Meja::create($request->except('_token', 'submit'));
        return redirect('meja');
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
    public function edit($no_meja)
    {
        $meja = Meja::find($no_meja);
        return view('edit-meja');
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
