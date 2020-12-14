@extends('layouts/manage')
@section('content2')
<div class="container">
<br><br>
<section class="main">
    <div class="container">
          <div class="col-lg-9 mx-auto">
              <form action="/managehotel/create" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="tipe">Tipe Kamar</label>
                      <input type="text" class="form-control"
                      required="required" name="tipe"><br>
                  </div>
                  <div class="form-group">
                      <label for="price">Harga (Rp.)</label>
                      <input type="text" class="form-control"
                      required="required" name="price"><br>
                  </div>
                  <div class="form-group">
                      <label for="room_left">Kamar Tersisa</label>
                      <input type="text" class="form-control"
                      required="required" name="room_left"><br>
                  </div>
                  <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <input type="text" class="form-control"
                    required="required" name="fasilitas"><br>
                </div>
                  <div class="form-group">
                      <label for="image">Gambar Ruangan</label>
                      <input type="file" class="form-control" required="required"
                     name="image"><br>
                     </div>

                  <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
                  </form>
          </div>
      </div>
</section>
</div>
@endsection
