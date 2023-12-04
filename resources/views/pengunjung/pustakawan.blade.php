@extends('pengunjung.mainapps')
@section('title')
    Pustakawan
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
            <h5 class="card-title mb-3 pustakawan">Profil Pustakawan</h5>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach ($users as $User)
                            <div class="card mb-4" style="max-width: 46.875em;">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/' . $User->gambar) }}" width="100%" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body pustakawan1">
                                            <p class="card-text">
                                                Nama : {{ $User->name }}
                                            </p>
                                            <p class="card-text">
                                                Jabatan : {{ $User->jabatan }}
                                            </p>
                                            <p class="card-text">
                                                Email : {{ $User->email }}
                                            </p>
                                            <p class="card-text"><small class="text-body-secondary">Pustakawan Dilmil I-04 Palembang</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 info">
                    <h4 class="card-header">INFORMASI</h4>
                    <hr>
                    <p>Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat
                        penemuan data katalog</p>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
