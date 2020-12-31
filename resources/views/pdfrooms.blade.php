@extends('layouts/pdf')
@section('judul', $page)

@section('data')

<table>
    <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Tipe Ruang</th>
        <th>Fasilitas</th>
        <th>Ruang Tersisa</th>
        <th>Updated At</th>
    </tr>
    @foreach($rooms as $r)
    <tr>
        <td align="center">{{$loop->iteration}}</td>
        <td align="center"><img width="100px" height="100px" src="{{public_path('storage/'.$r->picture)}}"></td>
        <td align="center">{{$r->tipe}}</td>
        <td align="center">{{$r->fasilitas}}</td>
        <td align="center">{{$r->room_left}}</td>
        <td align="center">{{$r->updated_at}}</td>
    </tr>
    @endforeach
</table>
@endsection
