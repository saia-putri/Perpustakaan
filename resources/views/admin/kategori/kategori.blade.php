@extends('admin.mainapps')
@section('title')
    Kategori
@endsection
@section('content')
    <section>
        <div class="container mb-5 mt-5">
            <div class="justify-content-end table-responsive">
                <table class="table">
                    <thead>
                        <a href="/createkategori" class="btn bg-btn mb-2">Tambahkan Kategori</a>
                        <tr>
                            <th scope="col-md">No</th>
                            <th scope="col-md">Kategori</th>
                            <th scope="col-md">Jumlah</th>
                            <th scope="col-md">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $Kategori)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $Kategori->kategori }}</td>
                                <td>{{ $Kategori->jumlahbuku }} Buku</td>
                                <td>
                                    <a href="/editkategori/{{ $Kategori->id }}" class="btn bg-btn"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/deletekategori/{{ $Kategori->id }}" class="btn bg-btn"><i
                                            class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
@endsection
