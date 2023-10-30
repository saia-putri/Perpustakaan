<?php

namespace App\Http\Controllers;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Rakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raks = Rak::all();
        return view('admin.rak', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createrak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'rak' => 'required',
                'jumlah' => 'required',
            ]
        );

        $raks = new Rak;
        $raks->rak = $request['rak'];
        $raks->jumlah = $request['jumlah'];
        $raks->save();

        return redirect('/rak');
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
        $Rak = Rak::find($id);
        return view('admin.editrak', compact('Rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'rak' => 'required',
                'jumlah' => 'required',
            ]
        );

        $Rak = Rak::find($id);
        $Rak->rak = $request['rak'];
        $Rak->jumlah = $request['jumlah'];
        $Rak->save();

        return redirect('/rak');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rak::destroy('id', $id);
        return redirect('/rak');
    }
}
