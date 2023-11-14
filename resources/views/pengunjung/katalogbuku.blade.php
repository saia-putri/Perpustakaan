@extends('pengunjung.mainapps')
@section('title')
    KATALOG BUKU
@endsection
@section('content')
    <!-- HEADER -->
    <section>
        <div class="header img2">
            <form class="d-flex mt-3" role="search" action="/search" method="get" autocomplete="off">
                <div class="marquee down pencarian1">

                    <div class="row">
                        <div class="col">
                            <input class="form-control form4" type="search" placeholder="Search" aria-label="Search"
                                type="text" class="s-search animated fadeInUp delay4" id="keyword" name="keywords"
                                value="" lang="id_ID" aria-hidden="true" autocomplete="off">
                        </div>
                        <div class="col">
                            <button class="btn bg-btn btn-outline-light form5 s-btn animated fadeInUp delay4" type="submit"
                                name="search" value="search"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <!--  -->
    <section>
        <div class="container py-5">
            <div class="katalogbuku">
                <h2>Katalog Buku</h2>
                <hr>
            </div>
            <div class="row row-cols-1 row-cols-md-5 g-4 katalog">
                <div class="col">
                    <div class="card">
                        <img src="/img/buku (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/detailbuku" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/img/buku (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/img/buku (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/img/buku (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/img/buku (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
