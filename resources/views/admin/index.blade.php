@extends('admin.mainapps')
@section('title')
    Home Admin
@endsection
@section('content')
    <section>
        <div class="container mb-5 mt-5 justify-content-end">
            <a href="/" class="btn mb-2"></a>
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                <div class="col-md">
                    <div class="card text-white card1" style="max-width: 100%;">
                        <div class="card-header">Data Buku</div>
                        <div class="card-body">
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="/buku">
                                <h1 class="card-title angka">{{ $totalbuku }}</h1>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card text-white card1" style="max-width: 100%;">
                        <div class="card-header">Data Kategori</div>
                        <div class="card-body">
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="/kategori">
                                <h1 class="card-title angka">{{ $totalkategori }}</h1>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card text-white card1" style="max-width: 100%;">
                        <div class="card-header">Data Rak</div>
                        <div class="card-body">
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="/rak">
                                <h1 class="card-title angka">{{ $totalrak }}</h1>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card text-white card1" style="max-width: 100%;">
                        <div class="card-header">Data User</div>
                        <div class="card-body">
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="/user">
                                <h1 class="card-title angka">{{ $totaluser }}</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
