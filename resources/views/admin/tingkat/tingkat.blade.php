@extends('admin.mainapps')
@section('title')
    Rak
@endsection
@section('content')
    <section id="header" class="header">
    </section>

    <section>
        <div class="container mb-5 mt-5">
            <div class="justify-content-end table-responsive">
                <table class="table">
                    <thead>
                        <a href="/createtingkat" class="btn bg-btn mb-2">Tambahkan Rak</a>
                        <tr>
                            <th scope="col-md">No</th>
                            <th scope="col-md">Tingkat</th>
                            <th scope="col-md">Jumlah</th>
                            <th scope="col-md">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tingkats as $Tingkat)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $Tingkat->rak }}</td>
                                <td>{{ $Tingkat->jumlahdatabuku }} Buku</td>
                                <td>
                                    <a href="/edittingkat/{{ $Tingkat->id }}" class="btn bg-btn"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/deletetingkat/{{ $Tingkat->id }}" class="btn bg-btn"><i
                                            class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
@endsection
