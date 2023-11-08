@extends('admin.mainapps')
@section('title')
    RAK
@endsection
@section('content')
<section id="header" class="header">
</section>

<section>
<div class="container mb-5 mt-5">
<div class="justify-content-end">
<table class="table">
  <thead>
  <a href="/createrak" class="btn bg-btn mb-2">Tambahkan Rak</a>
  <tr>
      <th scope="col">No</th>
      <th scope="col">Rak</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($raks as $Rak)
    <tr>
    <th scope="row">{{ $loop->iteration }}</th>
      <td width="">{{ $Rak->rak }}</td>
      <td width="">{{ $Rak->jumlah }}</td>
      <td>
        <a href="/editrak/{{ $Rak->id }}" class="btn bg-btn"><i class="bi bi-pencil-square"></i></a>
        <a href="/deleterak/{{ $Rak->id }}" class="btn bg-btn"><i class="bi bi-trash"></i></a>
      </td>
    </tr>
  @endforeach 
  </tbody>
</table>
</div>
</section>
@endsection