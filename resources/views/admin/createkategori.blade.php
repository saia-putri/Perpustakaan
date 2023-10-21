@extends('admin.mainapps')
@section('title')
    Create
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
            <label for="judul_buku" class="form-label">kategori Buku</label>
            <input type="text" class="form-control" id="kategori_buku" name="kategori_buku" placeholder="kategori buku">
        </div>
        <div class="mb-3">
            <label for="isi_buku" class="form-label">Isi kategori</label>
            <textarea class="form-control" name="isi_buku" id="isi_kategori" cols="30" rows="5" placeholder="isi kategori"></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar_buku" class="form-label">Gambar Buku</label>
            <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" accept="image/*">
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