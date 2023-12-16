@extends('pengunjung.mainapps')
@section('title')
    Katalog Buku
@endsection
@section('content')
    <!-- HEADER -->
    <section>
        <div class="header img2">
        </div>
        <div class="container mt-5">
            <form class="form-inline d-flex mt-3" role="search" action="/search" method="GET" autocomplete="off">
                <div class="marquee down">
                    <div class="row">
                        <div class="col">
                            <input class="form-control form2" type="search" placeholder="Search" aria-label="Search"
                                type="search" class="s-search animated fadeInUp delay4" id="search" name="search"
                                value="" lang="id_ID" aria-hidden="true" autocomplete="off">
                        </div>
                        <div class="col">
                            <button class="btn bg-btn btn-outline-light s-btn animated fadeInUp delay4" type="submit"
                                name="search" value="search"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--  -->
    <section>
        <div class="container mb-4 mt-3">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Daftar List Katalog Buku Perpustakaan</h5>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col-md">No</th>
                                        <th scope="col-md">Judul</th>
                                        <th scope="col-md">Jumlah</th>
                                        <th scope="col-md">Letak</th>
                                        <th scope="col-md">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bukus as $buku)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->jumlah }} Buku</td>
                                            <td>Rak {{ $buku->raks['rak'] }}</td>
                                            <td>
                                                <a href="/detailpengunjung/{{ $buku->id }}"
                                                    class="btn bg-btn">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 info">
                    <h4 class="card-header">INFORMASI</h4>
                    <hr>
                    <p>Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat penemuan data katalog</p>
                </div>
            </div>
        </div>

    </section>
@endsection
