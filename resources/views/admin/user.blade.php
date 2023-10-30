@extends('admin.mainapps')
@section('title')
    USER
@endsection
@section('content')
<section id="blog">
    <div class="container mb-5 mt-5">

        <table class="table">
            <thead>
                <a href="" class="btn bg-btn mb-2">Tambahkan User</a>
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
                
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="" width="155" alt=""></td>
                    <td>
                        <a href="" class="btn bg-btn"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn bg-btn"><i class="bi bi-trash"></i></a>
                        <a href="" class="btn bg-btn"><i class="bi bi-eye"></i></a>
                    </td>
                </tr>
                
            </tbody>
        </table>

    </div>
</section>
@endsection
