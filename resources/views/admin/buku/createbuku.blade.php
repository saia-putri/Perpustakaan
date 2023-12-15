@extends('admin.mainapps')
@section('title')
    Create Buku
@endsection
@section('content')
    <section id="blog">
        <div class="container py-5">
            <h3 class="fw-bold">Membuat Buku</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/savebuku" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Buku</label>
                            <select id="kategori" name="kategori" class="form-control">
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" placeholder="judul" value="{{ old('judul') }}">
                            <div class="invalid-feedback">
                                @error('judul')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang Buku</label>
                            <input type="text" class="form-control @error('pengarang') is-invalid @enderror"
                                id="pengarang" name="pengarang" placeholder="pengarang" value="{{ old('pengarang') }}">
                            <div class="invalid-feedback">
                                @error('pengarang')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                                id="penerbit" name="penerbit" placeholder="penerbit" value="{{ old('penerbit') }}">
                            <div class="invalid-feedback">
                                @error('penerbit')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror"
                                id="tahun_terbit" name="tahun_terbit" placeholder="tahun terbit"
                                value="{{ old('tahun_terbit') }}">
                            <div class="invalid-feedback">
                                @error('tahun_terbit')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Buku</label>
                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                                name="jumlah" placeholder="jumlah" value="{{ old('jumlah') }}">
                            <div class="invalid-feedback">
                                @error('jumlah')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="tingkat" class="form-label">Tingkat Buku</label>
                            <input type="text" class="form-control @error('tingkat') is-invalid @enderror" id="tingkat"
                                name="tingkat" placeholder="tingkat" value="{{ old('tingkat') }}">
                            <div class="invalid-feedback">
                                @error('tingkat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div> --}}
                        <div class="mb-3">
                            <label for="letak" class="form-label">Letak Buku</label>
                            <select id="letak" name="rak" class="form-control">
                                @foreach ($raks as $rak)
                                    <option value="{{ $rak->id }}">{{ $rak->rak }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        </div>
                        <div class="text-end">
                            <a href="/buku" class="btn bg-btn">Kembali</a>
                            <button type="submit" class="btn bg-btn">post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
