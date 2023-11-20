<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.buku.buku', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bukus = Kategori::all();
        $raks = Rak::all();
        return view('admin.buku.createbuku', compact('bukus', 'raks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kategori' => 'required',
                'judul' => 'required',
                'gambar' => 'mimes:png,jpg,gif|image|max:5048',
                'pengarang' => 'required',
                'penerbit' => 'required',
                'tahun_terbit' => 'required',
                'jumlah' => 'required',
                'rak' => 'required',
            ]
        );

        $file = $request->file('gambar');
        $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar')->extension());

        $bukus = new Buku;
        $bukus->kategoris_id = $request['kategori'];
        $bukus->judul = $request['judul'];
        $bukus->jumlah = $request['jumlah'];
        $bukus->raks_id = $request['rak'];
        $bukus->pengarang = $request['pengarang'];
        $bukus->penerbit = $request['penerbit'];
        $bukus->tahun_terbit = $request['tahun_terbit'];
        $bukus->gambar = $path;
        $bukus->save();

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::find($id);
        return view('admin.buku.detailbuku', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bukus = Buku::find($id);
        return view('admin.buku.editbuku', compact('bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'gambar' => 'mimes:png,jpg,gif|image|max:5048',
            ]
        );

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                storage::delete($request->oldImage);
            }
            $file = $request->file('gambar');
            $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar')->extension());
        } else {
            $path = $request->oldImage;
        }

        $bukus = Buku::find($id);
        $bukus->kategoris_id = $request['kategori'];
        $bukus->judul = $request['judul'];
        $bukus->jumlah = $request['jumlah'];
        $bukus->raks_id = $request['rak'];
        $bukus->pengarang = $request['pengarang'];
        $bukus->penerbit = $request['penerbit'];
        $bukus->tahun_terbit = $request['tahun_terbit'];
        $bukus->gambar = $path;
        $bukus->save();

        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::destroy('id', $id);
        return redirect('/buku');
    }
}
