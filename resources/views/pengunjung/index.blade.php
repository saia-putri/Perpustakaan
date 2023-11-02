@extends('pengunjung.mainapps')
@section('title')
    INDEX
@endsection
@section('content')
<section id="Pencarian">
    <div class="container-fluid" id="baground">
    <div class="container text-center" id="pembuka">

    
        <form class="d-flex mt-3" role="search" action="/search" method="get" autocomplete="off">
        <div class="marquee down pencarian">
        <h1 class="animated fadeInUp delay2">CARI</h1>
            <p class="s-search-info">
            masukkan satu atau lebih kata kunci dari judul, pengarang, atau subyek            </p>
          <!-- <input type="text" name="search" id="search" placeholder="search">
          <button type="submit"><i class="bi bi-search"></i></button> -->
          <div class="container">
            <div class="row">
                <div class="col">
                    <input class="form-control form2" type="search" placeholder="Search" aria-label="Search" type="text" class="s-search animated fadeInUp delay4" id="keyword" name="keywords" value="" lang="id_ID" aria-hidden="true" autocomplete="off">
                </div>
                <div class="col">
                    <button class="btn bg-btn btn-outline-light form3 s-btn animated fadeInUp delay4" type="submit" name="search" value="search"><i class="bi bi-search"></i></button>
                </div>
            </div>
            </div>
            
            
            </div>
            </form>

    <!-- BUKUU -->
    <div class="buku mt-5">
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

    <div class="row">
    <div class="carousel-inner">

        <div class="col">
            <div class="carousel-item active">
                <img src="/img/buku (1).jpg" alt="" width="10%">
            </div>
        </div>
        <div class="col">
            <div class="carousel-item">
                <img src="/img/buku (2).jpg" alt="" width="10%">
            </div>
        </div>
        <div class="col">
            <div class="carousel-item">
                <img src="/img/buku (3).jpg" alt="" width="10%">
            </div>
        </div>

    </div>
    </div>

        <!-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/buku (1).jpg" alt="" width="10%">
            </div>

            <div class="carousel-item">
                <img src="/img/buku (2).jpg" alt="" width="10%">
            </div>

            <div class="carousel-item">
                <img src="/img/buku (3).jpg" alt="" width="10%">
            </div>

            <div class="carousel-item">
                <img src="/img/buku (4).jpg" alt="" width="10%">
            </div>
            
            <div class="carousel-item">
                <img src="/img/buku (5).jpg" alt="" width="10%">
            </div>
        </div> -->

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <!-- . -->

    </div>
    </div>
</section>

<!-- <section id="buku" class="buku">
    <div class="container">
    

    </div> 
    </div>
</section> -->

@endsection