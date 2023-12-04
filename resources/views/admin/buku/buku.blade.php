@extends('admin.mainapps')
@section('title')
    Buku
@endsection
@section('content')
    <section>
        <div class="container mb-5 mt-5">
            <div class="justify-content-end table-responsive">

                <table class="table ">
                    <thead>
                        <a href="/createbuku" class="btn bg-btn mb-2">Tambahkan Buku</a>
                        <tr>
                            <th scope="col-md">No</th>
                            <th scope="col-md">Kategori</th>
                            <th scope="col-md">Judul</th>
                            <th scope="col-md">Gambar</th>
                            <th scope="col-md">Jumlah</th>
                            <th scope="col-md">Letak</th>
                            <th scope="col-md">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $buku->kategoris['kategori'] }}</td>
                                <td width="25%">{{ $buku->judul }}</td>
                                <td><img src="{{ asset('storage/' . $buku->gambar) }}" width="62.5em" alt=""></td>
                                <td width="20%">{{ $buku->jumlah }} Buku</td>
                                <td>Rak {{ $buku->raks['rak'] }}</td>
                                <td>
                                    <a href="/editbuku/{{ $buku->id }}" class="btn bg-btn"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/deletebuku/{{ $buku->id }}" class="btn bg-btn"><i
                                            class="bi bi-trash"></i></a>
                                    <a href="/detailbuku/{{ $buku->id }}" class="btn bg-btn"><i
                                            class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

    </section>
@endsection
