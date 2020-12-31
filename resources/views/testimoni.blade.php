@extends('layouts/main')
<br><br>
<div class="container testimonials mb-5"><br><br>
    <h3>Beri Kami Nilai&#128522;</h3>
    <form action="/testimoni/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" required="required" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="Nilai">Nilai</label><br>
            <select class="form-control" id="Nilai" name="Nilai" required="required">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div><br><br>

        <div class="form-group">
            <label for="testi">Testimoni</label>
            <textarea class="form-control" cols="5" rows="2" required="required" name="testi"
                placeholder="testimoni"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Send &nbsp;<i class="fa fa-paper-plane"
                aria-hidden="true"></i>
        </button>

        <!-- Modal -->
        <center>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Reservasi Telah
                            Diproses</b></h5>
                    </div>
                    <div class="modal-body">
                        <p><b>bukti reservasi kamar sudah kami kirim ke email anda</b></p>
                        <p><b>Terima Kasih</b></p>
                    </div>
                    <div class="footer">
                        <button type="submit" name="add" class="btn btn-primary mb-1"><a href="/home">OK</a>
                        </button><br>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </form>
</div>
</div>
