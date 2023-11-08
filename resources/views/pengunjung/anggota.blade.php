@extends('pengunjung.mainapps')
@section('title')
    AREA ANGGOTA
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
    <section id="header" class="header">
        <div class="container py-5">
            <div class="row">

                <div class="col-8">
                    <div class="card">
                        <h5 class="card-header">Masuk Anggota Perpustakaan</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Masukan ID anggota serta kata sandi yang diberikan oleh administrator
                                sistem perpustakaan. Jika Anda anggota perpustakaan namun belum memiliki kata sandi, hubungi
                                staf perpustakaan.</p>
                        </div>

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
