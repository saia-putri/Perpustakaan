<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        return view('admin.user.user', compact('users', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.user.createuser', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'jabatan' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'gambar' => 'mimes:png,jpg,jpeg,gif|image|max:2048',
            ]
        );

        $file = $request->file('gambar');
        $path = $file->storeAs('uploads', time() . '.' . $request->file('gambar')->extension());

        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = Hash::make($request['password']);
        $users->jabatan = $request['jabatan'];
        $users->gambar = $path;
        $users->save();

        return redirect('/user');
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
        $User = User::find($id);
        return view('admin.user.edituser', compact('User', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'gambar' => 'mimes:png,jpg,jpeg,gif|image|max:2048',
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

        $users = User::find($id);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = Hash::make($request['password']);
        $users->jabatan = $request['jabatan'];
        $users->gambar = $path;
        $users->save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy('id', $id);
        return redirect('/user');
    }
}
