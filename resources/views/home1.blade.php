@extends('layouts/main')

@section('Banner')
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life</h6>
                <h2 class="ml2">Relax Your Mind</h2>
                <p>we shall never deny a guest even the most ridiculous request</p>
                <a href="/booking" class="btn theme_btn button_hover">Get Started</a>
            </div>
        </div>
    </div>
    <div class="hotel_booking_area position">
        <div class="container">
        </div>
    </div>
</section>
@endsection

@section('Rooms')
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            @if (session('status'))
                <div class="alert alert-success">
                    <b><font size="4">{{session('status')}}</font></b>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <strong><font size="4">{{ $message }}</font></strong>
                </div>
            @endif
            <h2 class="title_color">Hotel Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>

        <div class="row mb_30">
            @foreach ($rooms as $room)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{asset('storage/'.$room->picture)}}" alt="">
                        <a href="/booking" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{$room->tipe}}</h4>
                    </a>
                    <h5>Rp.{{$room->price}}<small>/night</small></h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('Facilities')
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Hotel Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                        power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('About')
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior
                        on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
@endsection
@section('Testimonial')
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Testimonial from our Clients</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
            </p>
        </div>

        
        <div class="testimonial_slider owl-carousel">
        @foreach($testimonials as $t)
            <div class="media testimonial_item">
                <img class="rounded-circle" src="{{asset('image/kosong.jpg')}}" alt="">
                <div class="media-body">
                    <p>{{$t->testi}}</p>
                    <a href="#">
                        <h4 class="sec_h4">{{$t->Nama}}</h4>
                    </a>
                    <div class="d-none">{{$n=$t->Nilai}}</div>
                    <div class="star">
                    @for($i=0;$i<$n;$i++)
                        <a href="#"><i class="fa fa-star"></i></a>
                    @endfor
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>
@endsection
@section('Promo')
<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">news for promo</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
            </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="image/blog/blog-1.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="tag_btn">Bonus</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Low Cost Advertising</h4>
                        </a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                            farmer.</p>
                        <h6 class="date title_color">31st January,2020</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="image/blog/blog-2.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="tag_btn">Bonus</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Creative Outdoor Ads</h4>
                        </a>
                        <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and
                            fear are</p>
                        <h6 class="date title_color">31st January,2020</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="image/blog/blog-3.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Discount</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                        </a>
                        <p>Why do you want to motivate yourself? Actually, just answering that question fully can
                        </p>
                        <h6 class="date title_color">31st January,2020</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
