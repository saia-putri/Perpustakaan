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
                            {{-- <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori"
                                value=""> --}}
                            <select id="kategori" name="kategori" class="form-control">
<<<<<<< HEAD
                                @foreach ($bukus as $Buku)
                                    <option value="">{{ $Buku->kategoris_id }}</option>
=======
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->kategori }}</option>
>>>>>>> dcf21d6ee8de04845a134f0e21d66ee1028f9011
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
                            <input type="text" class="form-control" id="pengarang" name="pengarang"
                                placeholder="pengarang" value="">
                        </div>
                        <div class="mb-3">
<<<<<<< HEAD
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                placeholder="pengarang" value="">
=======
                            <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit_buku" value="">
>>>>>>> dcf21d6ee8de04845a134f0e21d66ee1028f9011
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="tahun terbit" value="">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah_buku" value="">
                        </div>
                        <div class="mb-3">
                            <label for="letak_buku" class="form-label">Letak Buku</label>
                            <select id="kategori" name="kategori" class="form-control">
                                @foreach ($raks as $rak)
                                    <option value="{{ $rak->id }}">{{ $rak->rak }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Buku</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah" value="">
                        </div>
<<<<<<< HEAD
                        <div class="mb-3">
                            <label for="letak" class="form-label">Letak Buku</label>
                            {{-- <input type="text" class="form-control" id="letak" name="letak" value=""> --}}
                            <select id="letak" name="letak" class="form-control">
                            @foreach ($bukus as $Buku)
                                <option value="">{{ $Buku->raks_id }}</option>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        </div>
=======
>>>>>>> dcf21d6ee8de04845a134f0e21d66ee1028f9011
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
