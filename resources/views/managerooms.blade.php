@extends('layouts/manage')
@section('content2')
<div class="container"><br><br>
    <section class="main">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <table class="table table-bordered table-striped">
                    <a href="managehotel/add" class="btn btn-primary">Tambah Data</a>&nbsp;&nbsp;
                    <button type="button" class="btn btn-info">
                        <a href="/manage/cetak_pdf" target="_blank" class="badge badgedanger">Cetak PDF</a></button></td><br><br>
                    @if(session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                        value="Refresh Page" onClick="document.location.reload(true)">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Tipe Ruang</th>
                            <th style="text-align:center">Ruang Tersisa</th>
                            <th style="text-align:center">Fasilitas</th>
                            <th style="text-align:center">Foto</th>
                            <th style="text-align:center" colspan="2">Fitur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $a)
                        <tr>
                            <td style="text-align:center">{{$a->id}}</td>
                            <td>{{$a->tipe}}</td>
                            <td>{{$a->room_left}}</td>
                            <td>{{$a->fasilitas}}</td>
                            <td><img width="50px" src="{{asset('storage/'.$a->picture)}}"></td>

                            <td style="text-align:center"><button type="button" class="btn btn-primary"><a
                                        href="/managehotel/edit/{{ $a->id }}"
                                        class="badge badgewarning">Edit</a></button></td>
                            <td style="text-align:center"><button type="button" class="btn btn-danger"><a
                                        href="/managehotel/delete/{{ $a->id }}"onclick="return confirm('Yakin ingin menghapus data ???')"
                                        class="badge badgedanger">Hapus</a></button></td>
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
