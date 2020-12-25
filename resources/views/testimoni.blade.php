@extends('layouts/main')
<br><br>
<div class="container testimonials mb-5"><br><br>
    <h3>Beri Kami Nilai&#128522;</h3>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nilai</label><br>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1<a href="#"><i class="fa fa-star"></i></a></option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div><br><br>
        <div class="form-group">
            <label for="content">Testimoni</label>
            <textarea class="form-control" cols="5" rows="2" required="required" name="content"
                placeholder="testimoni"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Send &nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i>
        </button>
    </form>
</div>
</div>
