@extends('pengunjung.mainapps')
@section('title')
    Home Pengunjung
@endsection
@section('content')
    <section id="Pencarian">
        <div class="container-fluid" id="baground">
            <div class="container text-center" id="pembuka">

                <form class="d-flex mt-3" role="search" action="/search" method="get" autocomplete="off">
                    <div class="marquee down pencarian">
                        <h1 class="animated fadeInUp delay2">CARI</h1>
                        <p class="s-search-info">
                            masukkan satu atau lebih kata kunci dari judul, pengarang, atau subyek
                        </p>

                        <div class="container">
                            <div class="row">
                                <div class="col-md">
                                    <input class="form-control form2" type="search" placeholder="Search"
                                        aria-label="Search" type="text" class="s-search animated fadeInUp delay4"
                                        id="keyword" name="keywords" value="" lang="id_ID" aria-hidden="true"
                                        autocomplete="off">
                                </div>
                                <div class="col-md">
                                    <button class="btn bg-btn btn-outline-light form3 s-btn animated fadeInUp delay4"
                                        type="submit" name="search" value="search"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <!-- BUKUU -->
                {{-- <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="row row-cols-1 row-cols-md-6 g-8 book">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="col-2">
                                <div class="carousel-item active">
                                    <img src="/img/buku (1).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="carousel-item">
                                    <img src="/img/buku (1).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="carousel-item">
                                    <img src="/img/buku (1).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>
                    </div> --}}
                {{--  --}}
                <div class="container py-5">
                    <div id="slider">
                        <figure>
                            <img src="/img/buku (1).jpg" alt="" style="width:20%; height:150px;">
                            <img src="/img/buku (1).jpg" alt="" style="width:20%; height:150px;">
                            <img src="/img/buku (1).jpg" alt="" style="width:20%; height:150px;">
                            <img src="/img/buku (1).jpg" alt="" style="width:20%; height:150px;">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
