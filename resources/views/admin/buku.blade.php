@extends('admin.mainapps')
@section('title')
    BUKU
@endsection
@section('content')
<section id="header" class="header">
</section>

<section>
<div class="container mb-5 mt-5">
<div class="container mb-5 mt-5 justify-content-end">

<table class="table">
  <thead>
  <a href="/createbuku" class="btn bg-btn mb-2">Tambahkan Buku</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Judul</th>
      <th scope="col">Gambar</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Letak</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($bukus as $Buku)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $Buku->kategoris_id }}</td>
      <td width="">{{ $Buku->judul }}</td>
      <td><img src="{{ asset('storage/' .$Buku->gambar) }}" width="" alt=""></td>
      <td width="">{{ $Buku->pengarang }}</td>
      <td width="">{{ $Buku->penerbit }}</td>
      <td width="">{{ $Buku->tahun_terbit }}</td>
      <td width="">{{ $Buku->jumlah }}</td>
      <td width="">{{ $Buku->raks_id }}"></td>
      <td>
        <a href="/editbuku/{{ $Buku->id }}" class="btn bg-btn"><i class="bi bi-pencil-square"></i></a>
        <a href="/deletebuku/{{ $Buku->id }}" class="btn bg-btn"><i class="bi bi-trash"></i></a>
        <a href="/detail" class="btn bg-btn"><i class="bi bi-eye"></i></a>
      </td>
    </tr>
  @endforeach  
  </tbody>
</table>

</div>

</section>
@endsection