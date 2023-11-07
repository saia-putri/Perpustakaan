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
                                    <option value="">{{ $bukus->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" name="judul_buku" value="">
                        </div>
                        <div class="mb-3">
                            <label for="pengarang_buku" class="form-label">Pengarang Buku</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang_buku" value="">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit_buku" value="">">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_buku" class="form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="gambar" name="gambar_buku" accept="image/*">
                            <input type="hidden" name="oldImage" value="">
                            <img src="" alt="" width="20%" class="img-thumbhnail mt-3" width="30%"
                                alt="Foto">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah_buku" value="">
                        </div>
                        <div class="mb-3">
                            <label for="letak_buku" class="form-label">Letak Buku</label>

                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn bg-btn">post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
