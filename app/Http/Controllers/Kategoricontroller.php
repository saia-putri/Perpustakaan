<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.createkategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kategori' => 'required',
                'ketersediaan' => 'required',
                'jumlah' => 'required',
            ]
        );

        $kategoris = new Kategori;
        $kategoris->kategori = $request['kategori'];
        $kategoris->ketersediaan = $request['ketersediaan'];
        $kategoris->jumlah = $request['jumlah'];
        $kategoris->save();

        return redirect('/kategori');
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
        $Kategori = Kategori::find($id);
        return view('admin.kategori.editkategori', compact('Kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'kategori' => 'required',
                'ketersediaan' => 'required',
                'jumlah' => 'required',
            ]
        );

        $kategoris = Kategori::find($id);
        $kategoris->kategori = $request['kategori'];
        $kategoris->ketersediaan = $request['ketersediaan'];
        $kategoris->jumlah = $request['jumlah'];
        $kategoris->save();

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy('id', $id);
        return redirect('/kategori');
    }
}
