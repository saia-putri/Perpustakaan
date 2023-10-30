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
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori">
        </div>
        <div class="mb-3">
            <label for="ketersediaan" class="form-label">Ketersediaan</label>
            <textarea class="form-control" name="ketersediaan" id="ketersediaan" cols="" rows="" placeholder="ketersediaan"></textarea>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Buku</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="">
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