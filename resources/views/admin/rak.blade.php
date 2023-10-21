@extends('admin.mainapps')
@section('title')
    Home
@endsection
@section('content')
<section id="header" class="header">
</section>

<section>
<div class="container mb-5 mt-5">
<div class="right-content">
<table class="table">
  <thead>
  <a href="" class="btn bg-btn mb-2">Tambahkan Artikel</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Ketersediaan</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row"></th>
      <td></td>
      <td width=""></td>
      <td><img src="" width="15" alt=""></td>
      <td><img src="" width="15" alt=""></td>
      <td>
        <a href="" class="btn bg-btn">edit</a>
        <a href="" class="btn bg-btn">delete</a>
        <a href="" class="btn bg-btn">detail</a>
      </td>
    </tr>
    
  </tbody>
</table>
</div>
</section>
@endsection