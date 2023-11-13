@extends('admin.mainapps')
@section('title')
    User
@endsection
@section('content')
    <section id="blog">
        <div class="container mb-5 mt-5">

            <table class="table">
                <thead>
                    <a href="/createuser" class="btn bg-btn mb-2">Tambahkan User</a>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $User)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $User->name }}</td>
                            <td>{{ $User->jabatan }}</td>
                            <td>{{ $User->email }}</td>
                            <td><img src="{{ asset('storage/' . $User->gambar) }}" width="50px" alt=""></td>
                            <td>
                                <a href="/edituser/{{ $User->id }}" class="btn bg-btn"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="/deleteuser/{{ $User->id }}" class="btn bg-btn"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
