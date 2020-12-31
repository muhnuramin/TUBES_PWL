@extends('layouts/pdf')
@section('judul', $page)

@section('data')

<table>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Profile</th>
        <th>Created at</th>
    </tr>
    @foreach($users as $u)
    <tr>
        <td align="center">{{$loop->iteration}}</td>
        <td align="center">{{$u->name}}</td>
        <td align="center">{{$u->email}}</td>
        <td align="center"><img width="100px" height="100px" src="{{public_path('storage/'.$u->profile)}}"></td>
        <td align="center">{{$u->created_at}}</td>
    </tr>
    @endforeach
</table>
@endsection
