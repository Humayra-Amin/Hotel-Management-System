@extends('customer.layouts.apps')

@section('apps')

<!-- Hero Section -->
<!-- Hero Section with Animations -->
<div class="home-page">
  <div id="roomCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
          <li data-target="#roomCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#roomCarousel" data-slide-to="1"></li>
          <li data-target="#roomCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Carousel items -->
      <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
              <img src="image/pool1.jpeg" alt="Hotel 1" class="slider-img">
              <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInLeft">
                <h1 class="slider-title">Welcome to Hotel Paradise</h1>
                <p class="lead">Experience luxury and comfort</p>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
              <img src="image/lobby5.jpg" alt="Hotel 2" class="slider-img">
              <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInDown">
                  <h1 class="slider-title">Your Dream Vacation</h1>
                  <p class="lead">Enjoy our premium services</p>
              </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
              <img src="image/product-item3.jpg" alt="Hotel 3" class="slider-img">
              <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInRight">
                  <h1 class="slider-title">Relax and Unwind</h1>
                  <p class="lead">The perfect place to stay</p>
              </div>
          </div>
      </div>

      <!-- Carousel controls -->
      <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev" aria-label="Previous slide">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next" aria-label="Next slide">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
</div>

<!-- Room Section -->
<div class="section-site">
    <div class="text-center mb-5">
        <h1 class="room-section-heading">Our Rooms</h1>
    </div>

    <div class="row">
        @foreach ($rooms as $room)
        <div class="col-md-3 mb-5">
            <div class="hotel-room card h-100">
                @if ($room->image)
                <img src='{{Storage::disk("public")->url($room->image[0])}}' class="card-img-top home-image" alt="Room Image">
                @endif
                <div class="hotel-room-body card-body text-center">
                    <a href="{{ route('singleRoom', ['id' => $room->id, 'cat_id' => $room->category_id]) }}" class="stretched-link text-dark text-decoration-none">
                        <h5 class="card-title">{{$room->roomtitle}}</h5>
                        <p class="card-text">${{$room->price}}/night</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- About Us Section -->
<section id="about" class="padding-xlarge text-center position-relative overflow-hidden" style="background:rgb(251, 209, 255)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 text-capitalize" style="color:rgb(135, 0, 79);">Welcome to Hotel Paradise</h2>
                <p>Hotel Paradise is a charming and comfortable retreat nestled in a picturesque setting. The warm and inviting atmosphere, coupled with friendly staff, ensures a delightful stay. Whether you're here for business or leisure, Hotel Paradise offers a haven of tranquility and hospitality for a memorable experience.</p>
                <a href="isan" class="btn btn-outline-dark btn-pill">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<div class="home-map">
    <h2 class="text-center homemap-title">Our Location</h2>
    <div class="map-container">
        <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8998823730496!2d91.79385975870986!3d22.362308893010515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88f83cd223b%3A0xfb574b70944b1da0!2sSanmar%20Ocean%20City!5e0!3m2!1sen!2sbd!4v1697105574585!5m2!1sen!2sbd" 
    width="100%" height="400" style="border:0;" 
    allowfullscreen="" loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>
</div>

@endsection
