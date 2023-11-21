@extends('pengunjung.mainapps')
@section('title')
    Area Anggota
@endsection
@section('content')
    <!-- HEADER -->
    <section>
        <div class="header img2">
        </div>
    </section>

    <!--  -->
    <section id="header" class="header">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header">Masuk Anggota Perpustakaan</h5>
                        <div class="card-body">
                            <p class="card-text">Masukan ID anggota serta kata sandi yang diberikan oleh administrator
                                sistem perpustakaan. Jika Anda anggota perpustakaan namun belum memiliki kata sandi, hubungi
                                staf perpustakaan.</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 info">
                    <h4 class="card-header">INFORMASI</h4>
                    <hr>
                    <p>Selamat Datang di Area Anggota, dimana Anda bisa melihat status keanggotaan dan peminjaman Anda.</p>
                </div>

            </div>
        </div>
    </section>
@endsection
