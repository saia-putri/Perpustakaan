<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengunjungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('pengunjung.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function warta()
    {
        return view ('pengunjung.warta');
    }

    /**
     * Display a listing of the resource.
     */
    public function info()
    {
        return view ('pengunjung.info');
    }

    /**
     * Display a listing of the resource.
     */
    public function lokasi()
    {
        return view ('pengunjung.lokasi');
    }

    /**
     * Display a listing of the resource.
     */
    public function anggota()
    {
        return view ('pengunjung.anggota');
    }

    /**
     * Display a listing of the resource.
     */
    public function pustakawan()
    {
        return view ('pengunjung.pustakawan');
    }

    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        if($request->has(search)){
            $bukus = Buku::where('bukus', $request->search)->get();
            $kategoris = Kategori::where('kategoris', $request->search)->get();
            $raks = Rak::where('raks', $request->search)->get();
        }
        else{
            $bukus = Buku::all();
            $kategoris = Kategori::all();
            $raks = Rak::all();
        }
        return view ('pengunjung.index', ['Buku' => $bukus], ['Kategori' => $kategoris], ['Rak', => $raks]);
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
