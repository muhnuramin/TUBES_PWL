@extends('layouts/manage')
@section('content2')
<div class="container">
    <br><br>
    <section class="main">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <table class="table table-bordered table-striped">
                    <br><br>
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" value="Refresh Page"
                            onClick="document.location.reload(true)">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama</th>
                            <th style="text-align:center">Nilai</th>
                            <th style="text-align:center">Bintang</th>
                            <th style="text-align:center">Testimoni</th>
                            <th style="text-align:center">Fitur</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($testimonials as $t)
                        <tr>
                            <td style="text-align:center">{{$loop->iteration}}</td>
                            <td>{{$t->Nama}}</td>
                            <td>{{$n=$t->Nilai}}</td>
                            <td>
                            @for($i=0;$i<$n;$i++)
                            <a href="#"><i class="fa fa-star"></i></a>
                            @endfor
                            </td>
                            <td>{{$t->testi}}</td>
                            <td style="text-align:center"><button type="button" class="btn btn-danger">
                                    <a href="/managetesti/delete/{{ $t->id }}" class="badge badgedanger"
                                        onclick="return confirm('Yakin ini adalah spam ???')">Spam</a>
                                </button></td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                {{$testimonials->appends(Request::all())->links()}}
            </div>
        </div>
    </section>
</div>
@endsection
