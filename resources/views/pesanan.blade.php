@extends('layouts/manage')
@section('content2')
<div class="container"><br><br>
<section class="main">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <table class="table table-bordered table-striped">
                <a href="managehotel/add" class="btn btn-primary">Tambah Data</a>&nbsp;&nbsp;
                <button type="button" class="btn btn-info">
                <a href="/manage/cetak_pdf" target="_blank" class="badge badgedanger">Cetak PDF</a></button></td>
                <thead class="thead-dark">
                <br><br>
                    <tr>
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Nama</th>
                        <th style="text-align:center">Email</th>
                        <th style="text-align:center">Phone</th>
                        <th style="text-align:center">Alamat</th>
                        <th style="text-align:center">Jumlah Kamar</th>
                        <th style="text-align:center">Testimoni</th>
                        {{-- <th style="text-align:center" colspan="2">Fitur</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($userscust as $a)
                    <tr>
                        <td style="text-align:center">{{$a->id}}</td>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->phone}}</td>
                        <td>{{$a->alamat}}</td>
                        <td>{{$a->jml_kamar}}</td>
                        <td>{{$a->testimoni}}</td>
                        <td style="text-align:center"><button type="button" class="btn btn-primary"><a href="/managehotel/edit/{{ $a->id }}"  class="badge badgewarning">Edit</a></button></td>
                        <td style="text-align:center"><button type="button" class="btn btn-danger"><a href="/managehotel/delete/{{ $a->id }}"  class="badge badgedanger">Hapus</a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$rooms->appends(Request::all())->links()}}
        </div>
    </div>
</section>
</div>
@endsection
