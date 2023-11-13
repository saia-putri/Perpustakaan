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
        <form action="updatebuku/{{ $Buku->id }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
                <label for="kategori" class="form-label">Kategori Buku</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                value="{{ $Buku->kategoris_id }}">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul"
                value="{{ $Buku->judul }}">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Buku</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <input type="hidden" name="oldImage" value="{{ $Buku->gambar }}">
                <img src="{{ asset('storage/' .$Buku->gambar) }}" class="img-thumbhnail mt-3" alt="" width="30%" alt="Foto">
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang"
                value="{{ $Buku->pengarang }}">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit"
                value="{{ $Buku->penerbit }}">
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $Buku->tahun_terbit }}">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah"
                value="{{ $Buku->jumlah }}">
            </div>
            <div class="mb-3">
                <label for="letak" class="form-label">Letak Buku</label>
                <input type="text" class="form-control" id="letak" name="letak"
                value="{{ $Buku->raks_id }}">
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


