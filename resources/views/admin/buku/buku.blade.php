@extends('admin.mainapps')
@section('title')
    Buku
@endsection
@section('content')
    <section>
        <div class="container mb-5 mt-5">
            <div class="justify-content-end">

                <table class="table">
                    <thead>
                        <a href="/createbuku" class="btn bg-btn mb-2">Tambahkan Buku</a>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Letak</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $buku->kategoris["kategori"] }}</td>
                                <td>{{ $buku->judul }}</td>
                                <td><img src="{{ asset('storage/' . $buku->gambar) }}" width="100px" alt=""></td>
                                <td>{{ $buku->jumlah }}</td>
                                <td>{{ $buku->raks["rak"] }}</td>
                                <td>
                                    <a href="/editbuku/{{ $buku->id }}" class="btn bg-btn"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/deletebuku/{{ $buku->id }}" class="btn bg-btn"><i
                                            class="bi bi-trash"></i></a>
                                    <a href="/detailbuku/{{ $buku->id }}" class="btn bg-btn"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

    </section>
@endsection