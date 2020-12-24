@extends('layouts/manage')
@section('content2')
<div class="container">
    <br><br>
    <section class="main">
        <div class="container">
            <div class="col-lg-9 mx-auto">
                <form action="/manageuser/update/{{$users->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$users->id}}"><br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="name" class="form-control" required="required" name="email"
                            value="{{$users->email}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" required="required" name="name"
                            value="{{$users->name}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" required="required" name="password"
                            value="{{$users->password}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="image">Profile</label>
                        <input type="file" class="form-control" required="required" name="image"
                            value="{{$users->profile}}"><br>
                        <img width="150px" src="{{asset('storage/'.$users->profile)}}">
                    </div>

                    <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
