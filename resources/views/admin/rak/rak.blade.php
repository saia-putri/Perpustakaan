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
                        <a href="/createrak" class="btn bg-btn mb-2">Tambahkan Rak</a>
                        <tr>
                            <th scope="col-md">No</th>
                            <th scope="col-md">Rak</th>
                            <th scope="col-md">Jumlah</th>
                            <th scope="col-md">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($raks as $Rak)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $Rak->rak }}</td>
                                <td>{{ $Rak->jumlahdatabuku }} Buku</td>
                                <td>
                                    <a href="/editrak/{{ $Rak->id }}" class="btn bg-btn"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/deleterak/{{ $Rak->id }}" class="btn bg-btn"><i
                                            class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
@endsection
