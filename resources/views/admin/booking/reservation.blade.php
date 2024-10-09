    @extends('admin.layouts.app')

    
    @section('app')


    <div id="content-wrapper" class="d-flex flex-column">
        

      
    <script>

    function handler(e){
      console.log(e.target.value);
    }
    $(document).ready(function(){
      var nowTemp = new Date();
      var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

      var checkin = $('#checkInDate').datepicker({

        beforeShowDay: function(date) {
          return date.valueOf() >= now.valueOf();
        },
        autoclose: true

      }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

          var newDate = new Date(ev.date);
          newDate.setDate(newDate.getDate() + 1);
          checkout.datepicker("update", newDate);

        }
        $('#checkOutDate')[0].focus();
      });


      var checkout = $('#checkOutDate').datepicker({
        beforeShowDay: function(date) {
          if (!checkin.datepicker("getDate").valueOf()) {
            return date.valueOf() >= new Date().valueOf();
          } else {
            return date.valueOf() > checkin.datepicker("getDate").valueOf();
          }
        },
        autoclose: true

      }).on('changeDate', function(ev) {
        let value1 = document.querySelector('#checkInDate');
        let price = document.querySelector('#roomcategory');
        let priceAttr = $("#roomcategory").find(':selected').attr('data-price');
        calculateDate(value1.value, ev.target.value, priceAttr)
      });

      
      const roomCategory = document.querySelector('#roomcategory');
     
      roomCategory.addEventListener("change", function(e) {
        const value1 = document.querySelector('#checkInDate');
        const value2 = document.querySelector('#checkOutDate');
        const price = e.target[e.target.selectedIndex].getAttribute('data-price');
        calculateDate(value1.value, value2.value, price)
      })
      function calculateDate(value1, value2, price ) {
          if (!(value1 && value2 && price)) return;
            date1 = new Date(value1);
            date2 = new Date(value2);
            var Difference_In_Time = date2.getTime() - date1.getTime();
            Difference_In_Days = Difference_In_Time / (1000 * 60 * 60 * 24);
            document.getElementById('price').value = parseFloat(Difference_In_Days) * parseFloat(price) || 0 ;
        }
      })

    </script>
    
        <!-- Main Content -->
        <div id="content">
    
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
    
                <!-- Topbar Search -->
                <form
    
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
    
                <!-- Topbar Navbar -->
                 <!-- Nav Item - User Information -->
                 <div class="nav-item dropdown no-arrow">
                  <a  class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                      <img class="img-profile rounded-circle"
                          src="{{asset('image/undraw_profile.svg')}}">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
    
                      @auth
                         
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                      @else
                          <a class="dropdown-item" href="admin/login">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Login
                          </a>
                         
                      @endauth
    
                      
                  </div>
                </div>   
           </nav>






<div class="container mt-3 ">



 @include('admin.inc.message')
    
    
    <h2 class="file-h2">Add Reservation</h2>
      
    <form action="{{ url('admin/booking') }}" method="POST" enctype="multipart/form-data">
      @csrf

    
        <div class="reserve-row reserve-jumbotron custom-box8">
          
          
          <div class="col-sm-8 form-group">
            <h2 class="add-text-center">Reservation</h2>
          </div>


    
          <div class="col-sm-6  form-group">
            <label for="cname" class="reserve-label">Customer Name</label>
            <input type="text" class="form-control" name="cname" id="cname" placeholder="Name" required>
          </div>
    


          <div class="col-sm-6 form-group">
            <label for="email" class="reserve-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="tel" class="reserve-label">Contact No.</label>
            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Contact Number" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="email" class="reserve-label">National Id</label>
            <input type="nid" class="form-control" name="nid" id="nid" placeholder="NID" required>
          </div>



        <div class="col-sm-6 form-group">
          <label for="roomcategory" class="reserve-label">Room Category </label>
          <select class="form-control" name="room_id" id="roomcategory" placeholder="Room Category" required>
            <option >Select Room Category</option>
            @foreach ($rooms as $room)
            <option value="{{ $room->id }}" data-price="{{$room->price}}">{{$room->roomtitle}} - {{$room->roomno}}</option>
            @endforeach
              
          </select>
        </div>
      



          <div class="col-sm-6 form-group">
            <label for="guestnumber" class="reserve-label">Number of Guests</label>
            <input type="text" class="form-control" name="guestnumber" id="guestnumber" placeholder="Number of Guests">
          </div>



          <div class="col-sm-6 form-group">
            <label for="checkInDate" class="reserve-label">Check-in Date</label>
                <input class="form-control clickable input-md" type="text" name="checkInDate" id="checkInDate" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="checkOutDate" class="reserve-label">Check-out Date</label>
            <input class="form-control clickable input-md" type="text" name="checkOutDate" id="checkOutDate" onchange="handler(event);"  required>
          </div>


          <div class="col-sm-6 form-group">
            <label for="price" class="reserve-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
          </div>


          <div class="col-sm-6 form-group">
            <label for="discount" class="reserve-label">Discount</label>
            <input type="number" name="discount" class="form-control" id="Discount" placeholder="discount">
          </div>


          <div class="col-sm-6 form-group">
            <label for="paid" class="reserve-label">Paid</label>
            <input type="number" name="paid" class="form-control" id="paid" placeholder="paid" required>
          </div>


          <div class="col-sm-12 form-group">
            <label for="specialrequest" class="reserve-label">Special Request, Ex. extra bed, comforter.....</label>
            <textarea name="specialrequest" class="form-control" id="specialrequest" rows="3"></textarea>
          </div>

    
    
          <button type="submit" class="btn btn-primary button-file">Submit</button>


        </div>


        </form>


    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <form action="{{url('/admin/logout')}}" method="DELETE">
                    @csrf
              
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

