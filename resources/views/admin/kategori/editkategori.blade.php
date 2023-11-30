@extends('admin.mainapps')
@section('title')
    Edit Kategori
@endsection
@section('content')
    <section id="blog">
        <div class="container py-5">
            <h3 class="fw-bold">Edit Kategori</h3>
            <div class="card">

                <div class="card-body">
                    <form action="/updatekategori/{{ $Kategori->id }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori"
                                value="{{ $Kategori->kategori }}">
                        </div>
                        <div class="text-end">
                            <a href="/kategori" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
