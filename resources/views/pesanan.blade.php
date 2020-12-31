@extends('layouts/manage')
@section('content2')
<div class="container"><br><br>
<section class="main">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <table class="table table-bordered table-striped">
                {{-- <a href="managehotel/add" class="btn btn-primary">Tambah Data</a>&nbsp;&nbsp; --}}
                <button type="button" class="btn btn-info">
                <a href="/manage/cetak_pesanan" target="_blank" class="badge badgedanger">Cetak PDF</a></button></td>
                <thead class="thead-dark">
                <br><br>
                    <tr>
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Nama</th>
                        <th style="text-align:center">Email</th>
                        <th style="text-align:center">Phone</th>
                        <th style="text-align:center">Alamat</th>
                        <th style="text-align:center">Jumlah Kamar</th>
                        <th style="text-align:center">Tipe Kamar</th>
                        {{-- <th style="text-align:center">Testimoni</th>
                        <th style="text-align:center" colspan="2">Fitur</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        // $i=(($userscust->currentPage()-1)*$userscust->perPage()+1)-1;
                    @endphp
                    @foreach($userscust as $userscusts)

                    <tr>
                        <td style="text-align:center">{{$userscusts->id}}</td>
                        <td>{{$userscusts->nama}}</td>
                        <td>{{$userscusts->email}}</td>
                        <td>{{$userscusts->phone}}</td>
                        <td>{{$userscusts->alamat}}</td>
                        <td>{{$userscusts->jml_kamar}}</td>
                        <td>{{$userscusts->type_room}}</td>
                        {{-- <td style="text-align:center"><button type="button" class="btn btn-primary"><a href="/managehotel/edit/{{ $userscusts->id }}"  class="badge badgewarning">Edit</a></button></td>
                        <td style="text-align:center"><button type="button" class="btn btn-danger"><a href="/managehotel/delete/{{ $userscusts->id }}"  class="badge badgedanger">Hapus</a></button></td> --}}
                    </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=10>
                        {{$userscust->appends(Request::all())->links()}}
                        </td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</section>
</div>
@endsection
