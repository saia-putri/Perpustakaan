@extends('admin.mainapps')
@section('title')
    Create Kategori
@endsection
@section('content')
    <section id="blog">
        <div class="container py-5">
            <h3 class="fw-bold">Membuat Kategori Buku</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/savekategori" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">kategori Buku</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                id="kategori" name="kategori" placeholder="kategori" value="{{ old('kategori') }}">
                            <div class="invalid-feedback">
                                @error('kategori')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="/kategori" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
