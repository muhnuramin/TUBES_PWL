@extends('layouts/manage')
@section('content2')
<div class="container">
<br><br>
<section class="main">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <table class="table table-bordered table-striped">
                <a href="manageuser/add" class="btn btn-primary">Tambah Data</a>&nbsp;&nbsp;
                <button type="button" class="btn btn-info"><a href="/manage/cetak_pdf" target="_blank"
                        class="badge badgedanger">Cetak PDF</a></button></td><br><br>
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Email</th>
                        <th style="text-align:center">Nama</th>
                        <th style="text-align:center">Password</th>
                        <th style="text-align:center">Profile</th>
                        <th style="text-align:center" colspan="2">Fitur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $a)
                    <tr>
                        <td style="text-align:center">{{$a->id}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->password}}</td>
                        <td><img width="50px" src="{{asset('storage/'.$a->profile)}}"></td>
                        <td style="text-align:center"><button type="button" class="btn btn-primary">
                            <a href="/manageuser/edit/{{ $a->id }}" target="_blank" class="badge badgewarning">Edit</a>
                        </button></td>
                        <td style="text-align:center"><button type="button" class="btn btn-danger">
                            <a href="/manageuser/delete/{{ $a->id }}" target="_blank" class="badge badgedanger">Hapus</a>
                        </button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->appends(Request::all())->links()}}
        </div>
    </div>
</section>
</div>
@endsection
