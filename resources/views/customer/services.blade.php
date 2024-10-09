@extends('customer.layouts.apps')


@section('apps')

 

 <section class="service-section">

    <div class="container">

      <h1 class="serviceheading">Services</h1>

      <p class="services-description">A vacation now days are a combination of leisure and activity. One can get relaxed and enjoy the calmness in our lavish infinity pool, a nerve soothing spa or one can enjoy the beach with kite flying, fire display, sea surf. Choose your own vacation at Hotel Pradise and enjoy your stay and discover Chittagong in your own way.</p>

      
      
      {{-- Infinity Swimming Pool --}}

      <div class="row service-image-container">


        <div class="col-sm-6">


            <img src="{{asset('image/swimming pool.jpeg')}}" class="img-fluid service-imgfile1" alt="">
            <button class="btn  service-view-btn " data-toggle="modal" data-target="#myModal">More Photos</button>


            <div class="modal fade service-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              
              <div class="modal-dialog modal-dialog-centered model-frame" role="document">
                  
                <div class="modal-content service-modal">

                    
                  <i class="fa fa-solid fa-xmark closemark" data-dismiss="modal" aria-label="Close"></i>
                      {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button> --}}
                  
                  
                  <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">

                    <div class="carousel-inner">


                      <div class="carousel-item active">
                        <img src="image/front-view.jpg"  class="service-slider-img">
                      </div>


                      <div class="carousel-item">
                        <img src="image/lobby10.jpg"  class="service-slider-img">
                      </div>


                      <div class="carousel-item">
                        <img src="image/room.jpg"  class="service-slider-img">
                      </div>


                      <div class="carousel-item">
                        <img src="image/yard.jpg" class="service-slider-img">
                      </div>


                      <div class="carousel-item">
                        <img src="image/pool2.jpg"  class="service-slider-img">
                      </div>


                    </div>



                    <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>



                    <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>



                  </div>
                  
                  
                  </div>


              </div>


          </div>


          <h2 class="mt-3 service-title text-center">Infinity Swimming Pool</h2>
          <p class="services-description">The infinity swimming pool is a breathtaking architectural feature commonly found in upscale hotels, designed to provide an awe-inspiring visual experience by seamlessly blending the pool's water with the surrounding  landscape or cityscape. Imagine yourself lounging beside this luxurious oasis, soaking in the panoramic views of the bustling city below.</p>
        </div>



        {{-- Restaurant --}}

        <div class="col-sm-6">

          <img src="{{asset('image/restaurant.jpg')}}" class="img-fluid service-imgfile1" alt="">
  <button class="btn  service-view-btn" data-toggle="modal" data-target="#myModal">More Photos</button>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              
              
              <div class="modal-dialog modal-dialog-centered model-frame" role="document">


                  <div class="modal-content">


                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>



                  <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
                    
                    
                    <div class="carousel-inner">


                      <div class="carousel-item active">
                        <img src="image/front-view.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/lobby10.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/room.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/yard.jpg" class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/pool2.jpg"  class="service-slider-img">
                      </div>



                    </div>


                    <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>



                    <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>



                  </div>


                  </div>


              </div>


          </div>


        <h2 class="mt-3 service-title text-center">Restaurant</h2>
        <p  class="services-description">Restaurants & Bar at Hotel Pradise turns up the heat on culinary glamour. Dine, drink and chill at our fabulous dining destinations, all overseen by our team of culinary expert lead by internationally experienced Chef & his team. Savor creative cocktails and delectable dishes at our four can't-miss Our Restaurant,Infinity Pool Café and Sunset Bar & Grill.</p>
      </div>


      </div>


    </div>


    
   {{-- Gym --}}

    <div class="container">

      <div class="row service-image-container">

        <div class="col-sm-6">
            <img src="{{asset('image/gym (2).jpg')}}" class="img-fluid service-imgfile" alt="">
            <button class="btn  service-view-btn" data-toggle="modal" data-target="#myModal">More Photos</button>



            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             
             
              <div class="modal-dialog modal-dialog-centered model-frame" role="document">
                  
                
                <div class="modal-content">



                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>



                  <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
                    
                    
                    <div class="carousel-inner">


                      <div class="carousel-item active">
                        <img src="image/front-view.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/lobby10.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/room.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/yard.jpg" class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/pool2.jpg"  class="service-slider-img">
                      </div>



                    </div>



                    <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>



                    <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>



                  </div>


                  </div>


              </div>


          </div>



          <h2 class="mt-3 service-title text-center">Gym</h2>
          <p class="services-description">Be a regular gym lover or not you can enjoy a quick work out   session in the Life Style Gym at the pool side. Luxury of Private Steam & Sauna suites to stimulate after exercise relaxation.</p>
        </div>



        {{-- Billiard Zone --}}

        <div class="col-sm-6">
            <img src="{{asset('image/Biliard zone.jpg')}}" class="img-fluid service-imgfile" alt="">
            <button class="btn  service-view-btn" data-toggle="modal" data-target="#myModal">More Photos</button>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              
              
              <div class="modal-dialog modal-dialog-centered model-frame" role="document">
                  <div class="modal-content">


                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>



                  <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
                    
                    
                    <div class="carousel-inner">


                      <div class="carousel-item active">
                        <img src="image/front-view.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/lobby10.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/room.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/yard.jpg" class="service-slider-img">
                      </div>
                      


                      <div class="carousel-item">
                        <img src="image/pool2.jpg"  class="service-slider-img">
                      </div>



                    </div>


                    <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>


                    <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>


                  </div>


                  </div>


              </div>


          </div>



          <h2 class="mt-3 service-title text-center">Billiard Zone</h2>
          <p  class="services-description">Groups of friends, both new and old, gather around the billiard tables, engaged in animated discussions and lighthearted banter as they take turns attempting tricky shots.Have fun with friends and family in our billiard zone, a perfect spot for entertainment.</p>
        </div>


      </div>


    </div>



    {{-- Laser tag --}}

    <div class="container">


      <div class="row service-image-container">


      <div class="col-sm-6">
        <img src="{{asset('image/laser tag.jpg')}}" class="img-fluid service-imgfile1" alt="">
        <button class="btn  service-view-btn" data-toggle="modal" data-target="#myModal">More Photos</button>



        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          
          
          <div class="modal-dialog modal-dialog-centered model-frame" role="document">
              
            
            <div class="modal-content">
                
              
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>



              <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
                
                
                <div class="carousel-inner">


                  <div class="carousel-item active">
                    <img src="image/front-view.jpg"  class="service-slider-img">
                  </div>



                  <div class="carousel-item">
                    <img src="image/lobby10.jpg"  class="service-slider-img">
                  </div>



                  <div class="carousel-item">
                    <img src="image/room.jpg"  class="service-slider-img">
                  </div>



                  <div class="carousel-item">
                    <img src="image/yard.jpg" class="service-slider-img">
                  </div>
                  


                  <div class="carousel-item">
                    <img src="image/pool2.jpg"  class="service-slider-img">
                  </div>



                </div>



                <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>



                <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                  <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>



              </div>


              </div>


          </div>



      </div>



      <h2 class="mt-3 service-title text-center">Laser tag</h2>
      <p  class="services-description">Laser tag is a team laser tag game that offers a unique environment to experience the adrenaline rush of adventure and team tactics.</p>
    </div>




    {{-- spa --}}

    <div class="col-sm-6">
      <img src="{{asset('image/Spa.jpg')}}" class="img-fluid service-imgfile1" alt="">
      <button class="btn  service-view-btn" data-toggle="modal" data-target="#myModal">More Photos</button>



      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        
        <div class="modal-dialog modal-dialog-centered model-frame" role="document">
            <div class="modal-content">


              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



                <div id="serviceCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
                    
                  
                  <div class="carousel-inner">


                      <div class="carousel-item active">
                        <img src="image/front-view.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/lobby10.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/room.jpg"  class="service-slider-img">
                      </div>



                      <div class="carousel-item">
                        <img src="image/yard.jpg" class="service-slider-img">
                      </div>
                      


                      <div class="carousel-item">
                        <img src="image/pool2.jpg"  class="service-slider-img">
                      </div>



                    </div>



                    <a class="carousel-control-prev " href="#serviceCarousel"  role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>



                    <a class="carousel-control-next" href="#serviceCarousel"  role="button" data-slide="next">
                      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>



                  </div>


            </div>


        </div>



    </div>



    <h2 class="mt-3 service-title text-center">Spa</h2>
    <p class="services-description">Leaving behind the pressure of everyday life, you enter a world where time stands still, and relaxation pervades. Our Authentic Thai Spa offers the perfect  retreat:  be it to heal, pamper, rejuvenate or revitalize, rest assured that your desire will be met, completely.
     let your spa journey begin!</p>



  </div>


      </div>


    </div>


  </section>


  @endsection



  