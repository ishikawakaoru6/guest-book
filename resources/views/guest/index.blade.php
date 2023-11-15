@extends('layouts.main')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Tamu</th>
      <th scope="col">Tanggal Check In</th>
      <th scope="col">Tanggal Check Out</th>
      <th scope="col">Petugas Check In</th>
      <th scope="col">Petugas Check Out</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($guests as $guest)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $guest->nama_tamu }}</td>
      <td>{{ $guest->tanggal_checkin }}</td>
      <td>@if ($guest->tanggal_checkout != null)
        {{$guest->tanggal_checkout}}
        @else
        <a href="/checkout" class="btn btn-sm btn-primary">Checkout</a>
        @endif
      </td>
      <td></td>
      <td></td>
      <td>@if ($guest->tanggal_checkout != null)
        Kunjungan Selesai
        {{$guest->tanggal_checkout}}
        @else
        Tamu Sedang Berkunjung
        @endif
      </td>
      <td><a href="/detail" class="btn btn-sm btn-outline-primary">Detail</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection