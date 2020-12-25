@extends('layouts/pdf')
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
        <td>{{$loop->iteration}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td><img width="100px" height="100px" src="{{public_path('storage/'.$u->profile)}}"></td>
        <td>{{$u->created_at}}</td>
    </tr>
    @endforeach
</table>
@endsection
