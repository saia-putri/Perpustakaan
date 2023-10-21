@extends('admin.mainapps')
@section('title')
    Edit
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
    <h3 class="fw-bold">Edit Kategori</h3>
<div class="card">

    <div class="card-body">           
        <form action="" method="post" enctype="multipart/form-data">
        
        
            <div class="mb-3">
                <label for="judul_kategori" class="form-label">Judul kategori</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="">
            </div>
            <div class="mb-3">
                <label for="isi_kategori" class="form-label">Isi Kategori</label>
                <textarea class="form-control" name="isi_kategori" id="isi_kategori" cols="30" rows="5">
               
            </textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_buku" class="form-label">Gambar Buku</label>
                <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" accept="image/*">
                <input type="hidden" name="oldImage" value="">
                <img src="" alt="" width="20%" class="img-thumbhnail mt-3" width="30%" alt="Foto">
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


