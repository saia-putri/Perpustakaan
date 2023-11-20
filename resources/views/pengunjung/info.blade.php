@extends('pengunjung.mainapps')
@section('title')
    Info
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
                        <h5 class="card-header">Informasi Perpustakaan</h5>
                        <div class="card-body">
                            <h5 class="card-title">Perpustakaan Pengadilan Militer I-04 Palembang</h5>
                            <p class="card-text">Alamat :
                                Jln. Gubernur H.A Bastari Komplek OPI Jakabaring, Kota Palembang<br>
                                Telepon : (0711) 5620579<br>
                                Fax Number :(0711) 5620579<br>
                            <h5>Opening Hours<br></h5>
                            Senin - Jumat :
                            Buka : 08.00 AM<br>
                            Istirahat : 12.00 - 13.00 PM<br>
                            Tutup : 16.00 PM<br>
                            Sabtu : Tutup<br>
                            </p>
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
