@extends('admin.mainapps')
@section('title')
    CREATE RAK
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
<h3 class="fw-bold">Membuat Rak Buku</h3>
<div class="card">
    <div class="card-body">      
    <form action="/saverak" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="rak" class="form-label">Rak</label>
            <input type="text" class="form-control" id="rak" name="rak" placeholder="rak">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
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