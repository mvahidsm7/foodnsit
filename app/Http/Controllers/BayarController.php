<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bayar');
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
