<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();

        return view('produk', compact('produks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->name = $request->input('name');
        // ... (set other attributes)

        $produk->save();

        return redirect()->route('produk')->with('success', 'Produk created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        $produk = Produk::findOrFail($id);
        return view('produk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        $produk = Produk::findOrFail($id);
        return view('produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
        $produk = Produk::findOrFail($id);
        $produk->name = $request->input('name');
        // ... (set other attributes)

        $produk->save();

        return redirect()->route('produk')->with('success', 'Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk')->with('success', 'Produk deleted successfully');
    }
}
