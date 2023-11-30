@extends('admin.mainapps')
@section('title')
    Profil
@endsection
@section('content')
    <section id="header" class="header">
        <div class="container mt-4">
            <div class="row">
                <h5 class="card-title mb-3 pustakawan">Profil {{ $user->jabatan }}</h5>

                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('storage/' . $user->gambar) }}" width="100%" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pustakawan1">
                                <p class="card-text">
                                    Nama : {{ $user->name }}
                                </p>
                                <p class="card-text">
                                    Jabatan : {{ $user->jabatan }}
                                </p>
                                <p class="card-text">
                                    Email : {{ $user->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
