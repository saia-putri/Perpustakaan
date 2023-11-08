@extends('admin.mainapps')
@section('title')
    EDIT USER
@endsection
@section('content')
    <section id="user">
        <div class="container py-5">
            <h3 class="fw-bold">Edit User</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/updateuser/{{ $User->id }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                value="{{ $User->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="jabatan" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan"
                                value="{{ $User->jabatan }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email"
                                value="{{ $User->email }}">
                        </div>
                        <div class="col-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" value="{{ $User->password }}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"
                                value="{{ $User->gambar }}">
                            <img src="{{ asset('storage/' . $User->gambar) }}" class="img-thumbhnail mt-3" alt=""
                                width="30%" alt="Foto">
                            <div class="invalid-feedback">
                                @error('gambar')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="/user" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
