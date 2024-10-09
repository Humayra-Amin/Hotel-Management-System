@extends('admin.layouts.app')


@section('app')


<div id="content-wrapper" class="d-flex flex-column">
    

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



<h2 class="edit-h2">Edit Reservation</h2>

  
<form action="admin/booking{{$booking->id}}" method="POST" enctype="multipart/form-data">
    @csrf

    @method ('PUT')


    <div class="editreserve-row editreserve-jumbotron custom-box8">
      
      
      <div class="col-sm-8 form-group">

        <h2 class="text-center">Reservation</h2>

      </div>



      <div class="col-sm-6  form-group">
        <label for="cname" class="editreserve-label">Customer Name</label>
        <input type="text" class="form-control" name="cname" id="cname" placeholder="Name" value="{{$booking->cname}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="email" class="editreserve-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{$booking->email}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="tel" class="editreserve-label">Contact No.</label>
        <input type="tel" name="tel" class="form-control" id="tel" placeholder="Enter Contact Number" value="{{$booking->tel}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="email" class="editreserve-label">National Id</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" value="{{$booking->nid}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="roomcategory" class="reserve-label">Room Category </label>
        <select class="form-control" name="roomcategory" id="roomcategory" required>

          @foreach ($rooms as $room)
            <option value="{{ $rooms }}">{{ $rooms }}>({{$id->roomtitle}} - {{$id->roomno}})</option>
        @endforeach

        
            {{-- <option @if($booking->room_id == 'Single Room') selected @endif>Single Room</option>
            <option @if($booking->room_id == 'Double Room') selected @endif>Double Room</option>
            <option @if($booking->room_id == 'Couple Room') selected @endif>Couple Room</option>
            <option @if($booking->room_id == 'VIP Room') selected @endif>VIP Room</option> --}}
        </select>
      </div>

      


      <div class="col-sm-6 form-group">
        <label for="guestnumber" class="editreserve-label">Number of Guests</label>
        <input type="text" class="form-control" name="guestnumber" id="guestnumber" value="{{$booking->guestnumber}}" placeholder="Number of Guests">
      </div>



      <div class="col-sm-6 form-group">
        <label for="checkInDate" class="editreserve-label">Check-in Date</label>
            <input type="date" class="form-control" name="checkInDate" id="checkInDate" value="{{$booking->checkInDate}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="checkOutDate" class="editreserve-label">Check-out Date</label>
        <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" value="{{$booking->checkOutDate}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="price" class="editreserve-label">Price</label>
        <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="{{$booking->price}}" required>
      </div>



      <div class="col-sm-6 form-group">
        <label for="discount" class="editreserve-label">Discount</label>
        <input type="number" name="discount" class="form-control" id="discount" placeholder="discount" value="{{$booking->discount}}">
      </div>


      <div class="col-sm-6 form-group">
        <label for="paid" class="editreserve-label">Paid</label>
        <input type="number" name="paid" class="form-control" id="paid" placeholder="paid" value="{{$booking->paid}}">
      </div>


      <div class="col-sm-6 form-group">
        <label for="due" class="editreserve-label">Due</label>
        <input type="number" name="due" class="form-control" id="due" placeholder="due" value="{{$booking->due}}">
      </div>


      <div class="col-sm-12 form-group">
        <label for="specialrequest" class="editreserve-label">Special Request, Ex. extra bed, comforter.....</label>
        <textarea name="specialrequest" class="form-control" id="specialrequest" value="{{$booking->specialrequest}}" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-primary button-form">Save</button>



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


