<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'gambar' => 'mimes:png,jpg,gif|image|max:5048',
                'jabatan' => 'required',
            ]
        );

        $file = $request->file('gambar');
        $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar')->extension());

        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
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
        $User = User::find($id);
        return view('pengunjung.edituser', compact('User'));
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

        if($request->file('gambar'))
        {
            if($request->oldImage) {
                storage::delete($request->oldImage);
            }
            $file = $request->file('gambar');
            $path = $file->storeAs('uploads', time() .'.'. $request->file('gambar')->extension());
        }
        else {
            $path = $request->oldImage;
        }

        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
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
