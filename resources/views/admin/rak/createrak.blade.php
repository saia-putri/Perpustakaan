@extends('admin.mainapps')
@section('title')
    Create Rak
@endsection
@section('content')
    <section id="blog">
        <div class="container py-5">
            <h3 class="fw-bold">Membuat Rak Buku</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/saverak" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="rak" class="form-label">Rak</label>
                            <input type="text" class="form-control @error('rak') is-invalid @enderror" id="rak"
                                name="rak" placeholder="rak" value="{{ old('rak') }}">
                            <div class="invalid-feedback">
                                @error('rak')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="/rak" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
