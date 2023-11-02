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
            <!-- <input type="" class="form-control" id="kategori" name="kategori" placeholder="kategori"> -->
            <select id="inputState" class="form-select">
            <option selected>Hukum</option>
            <option>TNI</option>
            <option>Majalah</option>
            </select>

        <!-- <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div> -->

                <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
            <ul class="dropdown-menu"> -->
                <!-- <option value="">Hukum</option>
                <option value="">TNI</option>
                <option value="">Majalah</option> -->
                <!-- <li><a class="dropdown-item" href="#">Hukum</a></li>
                <li><a class="dropdown-item" href="#">TNI</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> -->
            
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