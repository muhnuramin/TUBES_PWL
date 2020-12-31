@extends('layouts/pdf')
@section('judul', $page)
{{-- {{$page}} --}}
@section('data')

<table>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Jumlah Kamar</th>
        <th>Tipe Kamar</th>
    </tr>
    @foreach($users_costumer as $r)
    <tr>
        <td align="center">{{$loop->iteration}}</td>
        <td align="center">{{$r->nama}}</td>
        <td align="center">{{$r->alamat}}</td>
        <td align="center">{{$r->phone}}</td>
        <td align="center">{{$r->email}}</td>
        <td align="center">{{$r->jml_kamar}}</td>
        <td align="center">{{$r->type_room}}</td>
    </tr>
    @endforeach
</table>
@endsection
