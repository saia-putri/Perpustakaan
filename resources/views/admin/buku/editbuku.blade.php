@extends('admin.mainapps')
@section('title')
    Edit Buku
@endsection
@section('content')
    <section id="blog">
        <div class="container py-5">
            <h3 class="fw-bold">Edit Buku</h3>
            <div class="card">

                <div class="card-body">
                    <form action="/updatebuku/{{ $bukus->id }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Buku</label>
                            {{-- <select id="kategori" name="kategori" class="form-control">
                                @foreach ($bukus as $buku)
                                    <option value="{{ $bukus->kategoris['kategori'] }}">{{ $bukus->id }}</option>
                                @endforeach
                            </select> --}}
                            <input type="text" class="form-control" id="kategori"
                                value="{{ $bukus->kategoris['kategori'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ $bukus->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang Buku</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang"
                                value="{{ $bukus->pengarang }}">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                value="{{ $bukus->penerbit }}">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit"
                                value="{{ $bukus->tahun_terbit }}">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Buku</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                value="{{ $bukus->jumlah }}">
                        </div>
                        <div class="mb-3">
                            <label for="tingkat" class="form-label">Tingkat Buku</label>
                            <input type="text" class="form-control" id="tingkat" name="tingkat"
                                value="{{ $bukus->tingkat }}">
                        </div>
                        <div class="mb-3">
                            <label for="letak" class="form-label">Letak Buku</label>
                            <input type="text" class="form-control" id="letak" value="{{ $bukus->raks['rak'] }}"
                                disabled>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                            <input type="hidden" name="oldImage" value="{{ $bukus->gambar }}">
                            <img src="{{ asset('storage/' . $bukus->gambar) }}" class="img-thumbhnail mt-3" alt=""
                                width="30%" alt="Foto">
                        </div>
                        <div class="text-end">
                            <a href="/buku" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
