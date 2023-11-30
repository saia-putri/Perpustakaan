@extends('admin.mainapps')
@section('title')
    Detail Buku
@endsection
@section('content')
    <section id="blog">
        <div class="container mb-5 mt-5 blogbook">

            <div class="card mb-3" style="max-width: 53.125em;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $buku->gambar) }}" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-header">Detail Cantuman</h5>
                        <div class="card-body">
                            <p class="card-text">
                                Judul Buku : {{ $buku->judul }} <br>
                            </p>
                            <p class="card-text">
                                Kategori Buku : {{ $buku->kategoris_id }} <br>
                            </p>
                            <p class="card-text">
                                Pengarang Buku : {{ $buku->pengarang }} <br>
                            </p>
                            <p class="card-text">
                                Penerbit Buku : {{ $buku->penerbit }} <br>
                            </p>
                            <p class="card-text">
                                Tahun Terbit : {{ $buku->tahun_terbit }} <br>
                            </p>
                            <p class="card-text">
                                Jumlah Buku : {{ $buku->jumlah }} <br>
                            </p>
                            <p class="card-text">
                                Letak Buku : {{ $buku->raks_id }} <br>
                            </p>
                            <p class="card-text"><small class="text-body-secondary">Pengadilan Militer I-04
                                    Palembang</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
