@extends('pengunjung.mainapps')
@section('title')
    Katalog Buku
@endsection
@section('content')
    <!-- HEADER -->
    <section>
        <div class="header img2">
        </div>
    </section>
    <!--  -->
    <section>
        <div class="container py-5">
            <div class="katalogbuku">
                <h2>Katalog Buku</h2>
                <hr>
            </div>
            @foreach ($bukus as $buku)
                <div class="row row-cols-1 row-cols-md-2 g-4 katalog">
                    <div class="col-md">
                        <div class="card">
                            <img src="{{ asset('storage/' . $buku->gambar) }}" width="100%" alt="">
                            <div class="card-body">
                                <a href="/detailpengunjung/{{ $buku->id }}" class="btn btn-primary">Detail Buku</a>
                            </div>
                        </div>
                    </div>
            @endforeach

        </div>
        </div>
    </section>
@endsection
