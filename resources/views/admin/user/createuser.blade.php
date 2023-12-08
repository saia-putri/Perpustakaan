@extends('admin.mainapps')
@section('title')
    create user
@endsection
@section('content')
    <section id="user">
        <div class="container py-5">
            <h3 class="fw-bold">Membuat User</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/saveuser" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="name" value="{{ old('name') }}">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                name="jabatan" placeholder="jabatan" value="{{ old('jabatan') }}">
                            <div class="invalid-feedback">
                                @error('jabatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="email" value="{{ old('email') }}">
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="telephone" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                id="telephone" name="telephone" placeholder="telephone" value="{{ old('telephone') }}">
                            <div class="invalid-feedback">
                                @error('telephone')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div> --}}
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        </div>
                        <div class="text-end">
                            <a href="/user" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">Post</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
