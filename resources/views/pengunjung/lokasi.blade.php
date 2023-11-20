@extends('pengunjung.mainapps')
@section('title')
    Lokasi
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
                        <h5 class="card-header">Lokasi Pengadilan Militer I-04 Palembang</h5>
                        <div class="card-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.21135937638!2d104.78957597351469!3d-3.037915640046455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9c53edefa3c9%3A0xd68a5b477c52b34f!2sPengadilan%20Militer%20I%20-%2004%20Palembang!5e0!3m2!1sid!2sid!4v1698293099550!5m2!1sid!2sid"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
