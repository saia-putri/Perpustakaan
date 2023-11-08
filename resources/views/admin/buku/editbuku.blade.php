@extends('admin.mainapps')
@section('title')
    EDIT BUKU
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
    <h3 class="fw-bold">Edit Buku</h3>
<div class="card">

    <div class="card-body">           
        <form action="updatebuku/{{ $Buku->id }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
                <label for="kategori" class="form-label">Kategori Buku</label>
                <input type="text" class="form-control" id="kategori" name="kategori_buku"
                value="{{ $Buku->kategoris_id }}">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul_buku"
                value="{{ $Buku->judul }}">
            </div>
            <div class="mb-3">
                <label for="gambar_buku" class="form-label">Gambar Buku</label>
                <input type="file" class="form-control" id="gambar" name="gambar_buku" accept="image/*">
                <input type="hidden" name="oldImage" value="{{ $bukus->gambar_buku }}">
                <img src="{{ asset('storage/' .$Buku->gambar) }}" class="img-thumbhnail mt-3" alt="" width="30%" alt="Foto">
            </div>
            <div class="mb-3">
                <label for="pengarang_buku" class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang_buku"
                value="{{ $Buku->pengarang }}">
            </div>
            <div class="mb-3">
                <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit_buku"
                value="{{ $Buku->penerbit }}">
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $Buku->tahun_terbit }}">
            </div>
            <div class="mb-3">
                <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah_buku"
                value="{{ $bukus->jumlah }}">
            </div>
            <div class="mb-3">
                <label for="letak_buku" class="form-label">Letak Buku</label>
                <input type="text" class="form-control" id="letak" name="letak_buku"
                value="{{ $bukus->raks_id }}">
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


