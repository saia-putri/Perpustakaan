<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Rakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $raks = Rak::all();
        return view('admin.rak.rak', compact('raks', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.rak.createrak', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'rak' => 'required',
            ]
        );

        $raks = new Rak;
        $raks->rak = $request['rak'];
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
        $user = Auth::user();
        $Rak = Rak::find($id);
        return view('admin.rak.editrak', compact('Rak', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'rak' => 'required',
            ]
        );

        $Rak = Rak::find($id);
        $Rak->rak = $request['rak'];
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
