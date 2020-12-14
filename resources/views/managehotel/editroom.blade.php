@extends('layouts/manage')
@section('content2')
<div class="container">
<br><br>
<section class="main">
    <div class="container">
          <div class="col-lg-9 mx-auto">
            <form action="/managehotel/update/{{$rooms->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$rooms->id}}"><br>
                <div class="form-group">
                    <label for="tipe">Tipe Kamar</label>
                    <input type="name" class="form-control" required="required" name="tipe" value="{{$rooms->tipe}}"><br>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="text" class="form-control" required="required" name="price" value="{{$rooms->price}}"><br>
                </div>
                <div class="form-group">
                    <label for="room_left">Password</label>
                    <input type="text" class="form-control" required="required" name="room_left" value="{{$rooms->room_left}}"><br>
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <input type="text" class="form-control" required="required" name="fasilitas" value="{{$rooms->fasilitas}}"><br>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Ruangan</label>
                    <input type="file" class="form-control" required="required" name="image" value="{{$rooms->picture}}"><br>
                    <img width="150px" src="{{asset('storage/'.$rooms->picture)}}">
                    </div>

                <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
          </div>
      </div>
</section>
</div>
@endsection
