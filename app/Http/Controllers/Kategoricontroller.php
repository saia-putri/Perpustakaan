<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $kategoris = Kategori::all();
        return view('admin.kategori.kategori', compact('kategoris', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.kategori.createkategori', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kategori' => 'required',
            ]
        );

        $kategoris = new Kategori;
        $kategoris->kategori = $request['kategori'];
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
        $user = Auth::user();
        $Kategori = Kategori::find($id);
        return view('admin.kategori.editkategori', compact('Kategori', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'kategori' => 'required',
            ]
        );

        $kategoris = Kategori::find($id);
        $kategoris->kategori = $request['kategori'];
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
