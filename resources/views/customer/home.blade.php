@extends('customer.layouts.apps')

@section('apps')



<div class="home-page">


     <div id="roomCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">

        <img src="image/hotels2.jpeg" alt="hotels2" class="slider-img">


        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">The Hotel Paradise</h1>
        </div>


       </div>
 </div>



                                                 <!-- Our room -->

  <div class="section-site">

    <div class="row">
    <div class="col-md-12 mb-5 text-center">
        <h1 class="room-section-heading">Rooms</h1>
    </div>
    </div>



    <div class=row>


  @foreach ($rooms as $room)


    <div class="col-md-3  mb-5">
    <div class="hotel-room">


      @if ($room->image)
              


              <div>
                  <img src='{{Storage::disk("public")->url($room->image[0])}}' class="d-block w-100  home-image" >
              </div>


             
              @endif

           <div class="hotel-room-body">

            
          
            <a href="{{ route('singleRoom', ['id' => $room->id, 'cat_id' => $room->category_id])
               }}">
              <h5 class="card-title">{{$room->roomtitle}}</h5>
              <p class="card-text">{{$room->price}}</p>
            </a>


          </div>


    </div>


    </div>


  @endforeach  


  </div>


</div>


                                               <!--ABOUT US-->


       <section id="about" style="background:whitesmoke;" class="padding-xlarge text-center position-relative overflow-hidden">
            <div class="pattern-overlay pattern-right position-absolute">
                 <img src="" alt="">
                            </div>
                 <div class="container">
                   <div class="row">
          <div class="detail mb-4">
         <h2 style="color:#3e74ad;" class="display-5 text-capitalize">Welcome to Hotel Paradise</h2>
                <p>
                Hotel Paradise is a charming and comfortable retreat nestled in a picturesque setting. 
                The warm and inviting atmosphere, coupled with friendly staff, ensures a delightful stay.
                With well-appointed rooms, modern amenities, and a serene ambiance, guests can relax and unwind in paradise-like surroundings.
                Whether you're here for business or leisure, Hotel Paradise offers a haven of tranquility and hospitality for a memorable experience.
              </p>
              </div>
          </div>
                                            
             <a href="isan" class="btn btn-arrow btn-pill btn-medium btn-outline-dark bg-light text-black position-relative">
            <span class="abt">About Us</span>
    </a>
             </div>
    </section>




                                             <!-- Map Section -->
 <div class="home-map">


  <h2 class="text-center homemap-title">Location</h2>


  {{-- <p class="hopemap-details px-5">The Hotel Pradise, Chittagong is conveniently located within touching distance to prominent tourist attractions in and around Chittagong. Our hotel in Chittagong is also the perfect destination for a blissful getaway from Dhaka. Enjoy our warm hospitality and service that make you feel at home. Explore the all meals inclusive 4D Travel offer to plan your next stay.<p> --}}


    <div class="row mapsize">
      
  <!-- Add your map code here (e.g., using Google Maps) -->
  <div class=" col map-container">
      <!-- Add your map embed code here -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="1530" height="400" class="home-map"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


</div>

</div>

@endsection

