@extends('admin.layouts.app')


@section('app')

       <!-- Content Wrapper -->
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
                               <a class="dropdown-item" href="room/login">
                                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Login
                               </a>
                              
                           @endauth

                           
                       </div>
                    </div>   
                  </nav>
                       
 
                  

@include('admin.inc.message')


      <h2 class="single-h2">Booking Info</h2>

      <div class="book-container mt-3">

        <div class="book-card-text">

        </div>

          <div class="book-row">

            <div class="col-12">

            </div>


            <div class="col-12 bookinfo">

                  <h2 class="single-view">{{$booking->room->roomtitle}}-{{$booking->room->roomno}}</h2>
                
                    <div class= "row">


                    <div class="col-6">

                    <h2 class="singleview">Customer Name:</h2>

                    <p class="single-p">{{$booking->cname}}</p>

                    <h2 class="singleview">Contact No.: </h2>

                    <p class="single-p">{{$booking->tel}}</p>

                    <h2 class="singleview">Check-in Date: </h2>

                    <p class="single-p">{{$booking->checkInDate}}</p>

                    <h2 class="singleview">Total Amount: </h2>

                    <p class="single-p">{{$booking->price}}</p>


                    @if ($booking->due > 0)

                    <h2 class="singleview">Paid: </h2>
    
                    <p class="single-p">{{$booking->price - $booking->due}}</p>

                    
                    @else 


                    <h2 class="singleview">Paid: </h2>
    
                    <p class="single-p">{{$booking->price}}</p>



                    @endif

                </div>


                    <div class="col-6">

                    <h2 class="singleview">Email:</h2>

                    <p class="single-p">{{$booking->email}}</p>
    
                    <h2 class="singleview">Room Category:</h2>
    
                    <p class="single-p">{{$booking->room->roomtitle}}-{{$booking->room->roomno}}</p>

                    <h2 class="singleview">Check-out Date:</h2>

                    <p class="single-p">{{ $booking->checkOutDate}}</p>

                    <h2 class="singleview">Discount:</h2>

                    <p class="single-p">{{$booking->discount}}</p>

                    <h2 class="singleview">Due:</h2>

                    <p class="single-p">{{$booking->due}}</p>


                </div>

                    </div>



                <div class="d-flex">

                        

                        <form method="POST" action="{{ route('admin.booking.checkedout', ['id' => $booking->id]) }}">
                            @csrf

                            @if ($booking->due > 0)
                            <input type="text" class="due-file-control" name="paid" id="paid"  value="{{$booking->due}}" required>
                            @else 
                            <input type="text" class="due-file-control" name="paid" id="paid"  value="{{$booking->due}}" hidden>
                            @endif

                            @if ($booking->room->status == "Booked")
                                <button type="submit" class="btn-primary singleview-button">Check Out</button>
                            @endif

                        </form>


                        
                
                    </div>



                
            </div>


        </div> 
        
        
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