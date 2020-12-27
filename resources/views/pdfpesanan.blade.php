@extends('layouts/pdf')
@section('data')

<table>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Tipe Kamar</th>
    </tr>
    @foreach($rooms as $r)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td align="center"><img width="100px" height="100px" src="{{public_path('storage/'.$r->picture)}}"></td>
        <td>{{$r->tipe}}</td>
        <td>{{$r->fasilitas}}</td>
    </tr>
    @endforeach
</table>
@endsection
