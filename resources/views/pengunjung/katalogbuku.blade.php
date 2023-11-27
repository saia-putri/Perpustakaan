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
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach ($bukus as $buku)
                            <div class="col-md-4 mb-4">
                                <div class="card katalog">
                                    <img src="{{ asset('storage/' . $buku->gambar) }}" alt="" width="100%"
                                        height="370px">
                                    <div class="card-body">
                                        <a href="/detailpengunjung/{{ $buku->id }}" class="btn btn-primary">Detail
                                            Buku</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-3 info">
                    <h4 class="card-header">INFORMASI</h4>
                    <hr>
                    <p>Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat penemuan data katalog</p>
                </div>
            </div>
        </div>

    </section>
@endsection
