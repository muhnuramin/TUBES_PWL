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
                      <label for="name">Tipe</label>
                      <input type="text" class="form-control"
                      required="required" name="email"><br>
                  </div>
                  <div class="form-group">
                      <label for="email">Harga</label>
                      <input type="text" class="form-control"
                      required="required" name="name"><br>
                  </div>
                  <div class="form-group">
                      <label for="password">Tersedia</label>
                      <input type="password" encrypt="sha1" pattern=".{6,}" class="form-control"
                      required="required" name="password"><br>
                  </div>
                  <div class="form-group">
                    <label for="password">Fasilitas</label>
                    <input type="password" encrypt="sha1" pattern=".{6,}" class="form-control"
                    required="required" name="password"><br>
                </div>
                  <div class="form-group">
                      <label for="image">Profile</label>
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
