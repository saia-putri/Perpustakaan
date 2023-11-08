@extends('admin.mainapps')
@section('title')
    DETAIL BUKU
@endsection
@section('content')
    <section id="blog">
        <div class="container mb-5 mt-5 blogbook">

            @foreach ($bukus as $Buku)
                <div class="card mb-3" style="max-width: 850px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/buku (3).jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-header">Detail Cantuman</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Judul Buku : {{ $Buku->judul }} <br>
                                </p>
                                <p class="card-text">
                                    Kategori Buku : {{ $Buku->kategoris_id }} <br>
                                </p>
                                <p class="card-text">
                                    Pengarang Buku : {{ $Buku->pengarang }} <br>
                                </p>
                                <p class="card-text">
                                    Penerbit Buku : {{ $Buku->penerbit }} <br>
                                </p>
                                <p class="card-text">
                                    Ketersediaan Buku : <br>
                                </p>
                                <p class="card-text">
                                    Tahun Terbit : {{ $Buku->tahun_terbit }} <br>
                                </p>
                                <p class="card-text">
                                    Jumlah Buku : {{ $Buku->jumlah }} <br>
                                </p>
                                <p class="card-text">
                                    Letak Buku : {{ $Buku->raks_id }} <br>
                                </p>
                                <p class="card-text"><small class="text-body-secondary">Pengadilan Militer I-04
                                        Palembang</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
