@extends('layouts/main')
<section class="accomodation_area section_gap">
    <div class="container">

        <div class="row mb_30">
            {{-- @foreach
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{asset('storage/'.$room->picture)}}" alt="">
                        <button type="button" data-toggle="modal" data-target="#room1">
                            <a href="#" class="btn theme_btn button_hover">Detail</a>
                        </button>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{$room->tipe}}</h4>
                    </a>
                    <h5>Rp.{{$room->price}}<small>/night</small></h5>
                </div>
            </div>
            @endforeach --}}
            {{-- {{-- <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room2.jpg" alt="">
                        <button type="button" data-toggle="modal" data-target="#room2">
                            <a href="#" class="btn theme_btn button_hover">Detail</a>
                        </button>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Room2</h4>
                    </a>
                    <h5>Rp.200.000<small>/night</small></h5>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room3.jpg" alt="">
                        <button type="button" data-toggle="modal" data-target="#room3">
                            <a href="#" class="btn theme_btn button_hover">Detail</a>
                        </button>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Room3</h4>
                    </a>
                    <h5>Rp.750.000<small>/night</small></h5>
                </div>
            </div> --}}
            @foreach ($rooms as $room)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{asset('storage/'.$room->picture)}}" alt="">
                        <button type="button" data-toggle="modal" data-target="#room{{$room->id}}">
                            <a href="#" class="btn theme_btn button_hover">Detail</a>
                        </button>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{$room->tipe}}</h4>
                    </a>
                    <h5>Rp.{{$room->price}}<small>/night</small></h5>
                </div>
            </div>
            @endforeach
        </div>
        {{$rooms->appends(Request::all())->links()}}
    </div>
</section>
<!-- room 1 -->
@foreach ($rooms as $room)
<div class="modal fade" id="room{{$room->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kamar {{$room->tipe}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- Modal -->
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">Description :
                        <ol>
                            <li>Tipe Kamar : {{$room->tipe}}</li>
                            <li>Harga : Rp.{{$room->price}}</li>
                        </ol>
                    </li>
                    <li class="list-group-item">Facilities :
                        <ul>
                            <li>{{$room->fasilitas}}</li>
                            {{-- <li>Living Room</li>
                            <li>Bad Room</li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-warning"><a class="tombol" href="booking/pesan/{{$room->id}}">Book Now</a></button> --}}
                <button type="button" class="btn btn-warning"><a class="tombol" href="{{url('/booking',[$room->id])}}">Book Now</a></button>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- <!-- room 2 -->
<div class="modal fade" id="room2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Room 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- Modal -->
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">Description :
                        <ol>
                            <li>Tipe Kamar :</li>
                            <li>Ukuran :</li>
                            <li>Harga :</li>
                        </ol>
                    </li>
                    <li class="list-group-item">Facilities :
                        <ul>
                            <li>wifi</li>
                            <li>Living Room</li>
                            <li>Bad Room</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning"><a class="tombol" href="/datadiri">Book Now</a></button>
            </div>
        </div>
    </div>
</div>
<!-- room 3 -->
<div class="modal fade" id="room3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Room 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- Modal -->
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">Description :
                        <ol>
                            <li>Tipe Kamar :</li>
                            <li>Ukuran :</li>
                            <li>Harga :</li>
                        </ol>
                    </li>
                    <li class="list-group-item">Facilities :
                        <ul>
                            <li>wifi</li>
                            <li>Living Room</li>
                            <li>Bad Room</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning"><a class="tombol" href="/datadiri">Book Now</a></button>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
