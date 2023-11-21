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
            <div class="row">
                <h5 class="card-title mb-3 pustakawan">Profil Pustakawan</h5>
                
                @foreach ($users as $User)
                    <div class="card mb-3" style="max-width: 46.875em;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{ asset('storage/' . $User->gambar) }}" width="100%" alt="">
                            </div>
                            <div class="col-8">
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
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-3 info">
                    <h4 class="card-header">INFORMASI</h4>
                    <hr>
                    <p>Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat penemuan data katalog</p>
                </div>

            </div>
        </div>
    </section>
@endsection
