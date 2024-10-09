@extends('customer.layouts.apps')


@section('apps')



  <div class="room-details">



    <!-- Room Details Section -->
    <section class="my-5">
      @if (session('msg'))  
          <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
            {{session('msg')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      <div class="row">
        <div class="col-md-6 room-slider">

           

          <!-- Slider Carousel -->
          <div id="roomSlider" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

              @if ($room->image)

              @foreach ($room->image as $img)


              <div>
                  <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
              </div>



              @endforeach
              

              
              @endif  


            </div>




            <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>



            <a class="carousel-control-next" href="#roomSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>




          </div>

        </div>


        <div class="col-md-6">


          <!-- Room Details -->
            <h2>{{$room->roomtitle}}</h2>

            {{-- <p>Description: {{$room->description}}</p> --}}

            {{-- <p>Room Availability: {{$room->availablerooms}}</p> --}}

             <p>Floor No: {{$room->floorno}}</p>


            <p>Max Occupancy: {{$room->maxoccupancy}}</p>

            <p>Price: {{$room->price}}</p>

            <p>Facilities: </p>

            @foreach ($room->facilities as $f)
           
            <li class="facilities-item"> {{$f}} </li>
        
        @endforeach   

        
            <p>{{$room->roomprice}}</p>



             
              @include('admin.inc.message')

              @if($cat_id->count() == 0)
                        <h4 class="text-danger">Room Not Availabile</h4>
              @else 
                  <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#reservationModal">Book Now</button>
              @endif

           


          </div>

        </div>

    </section>

    </div>


</div>



@include('admin.inc.message')



<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

              <form action="{{ route('customer.book') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3 box-shadow">
                  @if($room->discount > 0 )
                      @php $offer_price =  ($room->price - $room->discount) @endphp
                      <h4 class="text-center text-success">Offer Price 
                        <del class="text-danger"> <span id="regularprice">{{$room->price}}</span> </del>  <span id="offerprice">{{$offer_price}}</span>
                      </h4>
                  @endif
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter your name" name="cname" class="form-control" id="name" required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                        <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Phone</label>
                        <input type="tel"  placeholder="Enter your Phone" name="tel" class="form-control" id="email" required>
                    </div>
                  </div>
                </div>    
                <div class="form-group">
                  <label for="">Available Rooms</label>
                  <select name="room_id" id="room_cat" class="form-select">
                    @foreach ($cat_id as $cat)
                    <option value="{{ $cat->id }}" data-price="{{$cat->price}}" data-discount="{{$cat->discount}}">{{$room->roomtitle}} - {{ $cat->roomno }} </option>
                    @endforeach  
                  </select>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label for="checkInDate">Check-in Date</label>
                        <input type="text" class="form-control" name="checkInDate" id="checkInDate" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label for="checkOutDate">Check-out Date</label>
                        <input type="text" class="form-control" name="checkOutDate" id="checkOutDate" required>
                    </div>
                  </div> 
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <label for="">Guest Number</label>
                    <input type="text" name="guestnumber" class="form-control">
                  </div>
                  <div class="col-6">                     
                      <label for="">Price</label>
                      <input type="text" name="show_price" class="form-control" id="show_price_info" value="{{ $room->price}}" readonly>                   
                      <input type="hidden" name="price" class="form-control" id="price_value" value="{{ $room->price}}" >                   
                      <input type="hidden" name="discount"  id="discount_input" value="{{ $room->discount}}" >                   
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Paid Amount</label>
                  <input type="text" name="paid" class="form-control" id="paid_input" value="0">
                </div>
                <div class="">
                  <span id="available_status"></span>
                </div>
                <div class="text-end">                  
                  <button type="submit" id="submit_booking" class="btn btn-primary px-5 #">Book Now</button>
                </div>
              </form>              
            </div>
            



       
          


        </div>

    </div>

</div>




@endsection

@section('myscript')
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
<script>

  $(function(){

    // On Change Value
    $(document).on('change', '#room_cat', function(){
      let price       =  $(this).children('option:selected').data('price'); 
      let discount    =  $(this).children('option:selected').data('discount'); 
      let offer_price = (price - discount);
      $('#price_value').val(price);
      $('#show_price_info').val(price);
      $('#discount_input').val(discount);

      $('#regularprice').text(price)
      $('#offerprice').text(offer_price)
    });


    $('#checkOutDate').datepicker();
    $("#checkInDate").datepicker().on('change', function(){
      $('#checkOutDate').val('');
      $('#show_price_info').val(0);
    });
    
    $(document).on('change', '#checkOutDate', function(){
      let date1 = $("#checkInDate").val();
      let date2 = $("#checkOutDate").val();    
      date1 = new Date(date1);
      date2 = new Date(date2);
      let milli_secs = date1.getTime() - date2.getTime();
      let days = milli_secs / (1000 * 3600 * 24);
      let stay_days = Math.round(Math.abs(days));

      let price     = $('#price_value').val();
      let discount  = $('#discount_input').val();
      price = (price - discount) * stay_days;
      $('#show_price_info').val(price);

      let room_id   =  $("#room_cat").children('option:selected').val(); 
      axios.post('/check-availability', {
          checkInDate: date1, 
          checkOutDate: date2, 
          room_id: room_id,
        })
        .then(function (response) {
           $("#available_status").html('<span class="text-success">Room is available for the specified date</span>' )
           $('#submit_booking').show();
        })
        .catch(function (error) {
          $("#available_status").html('<span class="text-danger">Room is not available.Choose Different Date</span>' )
          $('#submit_booking').hide();
        });

    });

    
    
  });


 
</script>

@endsection

