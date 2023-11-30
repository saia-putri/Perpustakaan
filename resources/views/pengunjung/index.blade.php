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
                        <p class="s-search-info font1">
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

            </div>
        </div>
    </section>
@endsection
