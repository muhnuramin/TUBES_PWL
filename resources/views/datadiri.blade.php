@extends('layouts/main')
<br><br><br>
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group  mt-5">
                    <h3><i class="fa fa-user"> Personal Identity</i></h3>
                    <input type="text" class="form-control mt-4" placeholder="Nama" aria-label="First name">
                    <input type="text" class="form-control mt-4" placeholder="Alamat" aria-label="First name">
                    <input type="text" class="form-control mt-4" placeholder="No.Telepon" aria-label="First name">
                    <input type="text" class="form-control mt-4" placeholder="Email" aria-label="First name">
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
        <center><button type="button" class="btn btn-primary mb-5" onclick="return confirm('Kami akan mengirimkan invoice pembayaran melalui email Anda,Pastikan email Anda aktif')"><i class="fa fa-save"> Save</i></button></center>
    </div>
</section>
