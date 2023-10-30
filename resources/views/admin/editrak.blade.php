@extends('admin.mainapps')
@section('title')
    EDIT KATEGORI
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
    <h3 class="fw-bold">Edit Kategori</h3>
<div class="card">

    <div class="card-body">           
        <form action="/updaterak/{{ $Rak->id }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="rak" class="form-label">Rak</label>
            <input type="text" class="form-control" id="rak" name="rak" placeholder="rak" value="{{ $Rak->rak }}">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah"
            value="{{ $Rak->jumlah }}">
        </div>
            <div class="text-end">
                <a href="/rak" class="btn bg-btn">Kembali</a>
                <button type="submit" class="btn bg-btn">Update</button>
            </div>
        </form>
    </div>

</div>
</div>
</section>
@endsection


