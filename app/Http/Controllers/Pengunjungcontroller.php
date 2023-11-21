<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $users = User::all();
        return view('pengunjung.pustakawan', compact('users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function masuk()
    {
        return view ('pengunjung.masuk');
    }

    /**
     * Display a listing of the resource.
     */
    public function katalog()
    {
        $buku = Buku::all();
        return view ('pengunjung.katalogbuku', compact('buku'));
    }

     /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::find($id);
        return view ('pengunjung.detailpengunjung', compact('buku'));
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
        
        return view ('pengunjung.index');
        
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
