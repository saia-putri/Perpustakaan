@extends('pengunjung.mainapps')
@section('title')
    Home Pengunjung
@endsection
@section('content')
    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <form class="d-flex mt-3" role="search" action="/search" method="get" autocomplete="off">
                <div class="marquee down">
                    <h1 class="animated fadeInUp delay2">CARI</h1>
                    <p class="s-search-info font1">
                        masukkan satu atau lebih kata kunci dari judul, pengarang, atau subyek
                    </p>

                        <div class="row">
                            <div class="col">
                                <input class="form-control form2" type="search" placeholder="Search" aria-label="Search"
                                    type="text" class="s-search animated fadeInUp delay4" id="keyword" name="keywords"
                                    value="" lang="id_ID" aria-hidden="true" autocomplete="off">
                            </div>
                            <div class="col">
                                <button class="btn bg-btn btn-outline-light form3 s-btn animated fadeInUp delay4"
                                    type="submit" name="search" value="search"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                </div>
            </form>
        </main>
    </section>
@endsection
