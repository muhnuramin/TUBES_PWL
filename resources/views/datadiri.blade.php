@extends('layouts/main')
<br><br><br>
<section class="accomodation_area section_gap">
    <div class="container">
        <form action="/booking/create" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">
                <div class="form-group  mt-5">

                        <h3><i class="fa fa-user"> Personal Identity</i></h3>
                        <input name="nama" type="text" class="form-control mt-4" placeholder="Nama" aria-label="nama">
                        <input name="alamat" type="text" class="form-control mt-4" placeholder="Alamat" aria-label="First name">
                        <input name="phone" type="text" class="form-control mt-4" placeholder="No.Telepon" aria-label="First name">
                        <input name="email" type="text" class="form-control mt-4" placeholder="Email" aria-label="First name">
                        <input name="jml_kamar" type="text" class="form-control mt-4" placeholder="Jumlah Kamar" aria-label="First name">
                        <input name="type_room" type="text" class="form-control mt-4" disabled value="{{ $rooms->tipe }}">
                        <input name="type_room_hidden" type="hidden" class="form-control mt-4" value="{{ $rooms->tipe }}">

                </div>
            </div>
            <div class="col">
                <div class="form-group  mt-5">
                    <h3><i class="fa fa-university"> Information Bank (Optional)</i></h3>
                    <input type="text" class="form-control mt-4" placeholder="Nama Bank" aria-label="First name">
                    <input type="text" class="form-control mt-4" placeholder="No Rekening" aria-label="First name">
                    <input type="text" class="form-control mt-4" placeholder="Atas nama" aria-label="First name">
                    {{-- <input type="text" class="form-control mt-4" placeholder="  " aria-label="First name"> --}}
                    <p>NB :Proses pembatalan dan pengembalian pembayaran akan kami lakukan pada nomor rekening yang
                        telah Anda masukkan.</p>
                </div>
            </div>
        </div>
        {{-- <center><button type="submit" class="btn btn-primary mb-5" onclick="return confirm('Kami akan mengirimkan invoice pembayaran melalui email Anda,Pastikan email Anda aktif')"><i class="fa fa-save"> Save</i></button></center> --}}
        <center><button type="submit" class="btn btn-primary mb-5" onclick="return confirm('Kami akan mengirimkan invoice pembayaran melalui email Anda,Pastikan email Anda aktif')"><i class="fa fa-save"> Save</i></button></center>
    </form>
    </div>
</section>
