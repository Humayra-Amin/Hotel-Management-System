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


                    <div class="dash-container">



                        <div class="card">



                          <div class="dash-card-body">



                            <h3 class="dash-h3">Overview</h3>



                            <div class="dash-row">



                        <div class="col-lg-12">


                          <div class="dash-row">


                            <div class="col-sm-3 Overview-body">
                              <h5 class="dash-card-title dash-text-center">Today's Check-in</h5>
                              <p class="overview-text dashp-text-center">{{$todayBook}}</p>
                            </div>


                            <div class="col-sm-3 Overview-body">
                              <h5 class="dash-card-title dash-text-center">Today's Check-out</h5>
                              <p class="overview-text dashp-text-center">{{$todayCheckout}}</p>
                            </div>


                            <div class="col-lg-3 Overview-body">
                              <h5 class="dash-card-title dash-text-center">Available Room</h5>
                              <p class="overview-text dashp-text-center">{{$ablCount}}</p>
                            </div>


                            <div class="col-lg-3 Overview-body">
                              <h5 class="dash-card-title dash-text-center">Occupied Room</h5>
                              <p class="overview-text dashp-text-center">{{$bookedCount}}</p>
                            </div>


                            </div>


                          </div>



                        </div>
                      </div>


                    </div>


                  
                      <div class="row">


                        <h3 class="dashtitle-h3">Available Rooms</h3>


                        <!-- Rooms -->
                  


                        @foreach ($roomCounts as $catName => $roomCount)
                            
                        
                        <div class="col-md-3">


                          <div class="card">
                            <img src="{{asset('image/luxary room.jpg')}}" class="img-fluid imagefile" alt="">
                            <div class="card-body">
                              <h5 class="card-title">{{$catName}}</h5>
                              <p class="card-text">Available Rooms: {{$roomCount["Available"]}}</p>
                              <button class="btn btn-primary" data-toggle="modal" data-target="#roomStatusModal{{str_replace(" ","_",$catName)}}" data-occupied="2" data-available="5">View</button>
                            </div>
                          </div>
                        
                  
                      <div class="modal fade" id="roomStatusModal{{str_replace(" ","_",$catName)}}" tabindex="-1" role="dialog" aria-labelledby="roomStatusModalLabel" aria-hidden="true">
                        
                        <div class="modal-dialog" role="document">

                          <div class="modal-content">

                            <div class="modal-header">
                              <h5 class="modal-title" id="roomStatusModalLabel">Room Status</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                              <p>Booked Rooms: <span id="modalOccupied">{{$roomCount["bookRoomNo"]}}</span></p>
                              <p>Available Rooms: <span id="modalAvailable">{{$roomCount["ablRoomNo"]}}</span></p>
                            </div>

                          </div>
                        
                        </div>
                      
                      </div>



                      </div>
                           
                      @endforeach
                
                  
                  
                      <div class="card">

                        <div class="card-body">

                      <div class="row">

                        <div class="col-md-12">

                          <div class="card">

                            <div class="card-body">

                              <h5 class="card-title">Recent Bookings</h5>

                              <table class="table">


                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th> Room ID</th>
                                    <th>Room Category</th>
                                    <th>Payment Status</th>
                                  </tr>
                                </thead>


                                <tbody>

                              @foreach ($lastFiveBook as $last)
                                    
                                <tr>
                                  <td>{{$last->cname}}</td>
                                  <td>{{$last->room_id}}</td>
                                  <td>{{$last->room->category_id}}-{{$last->room->roomno}}</td>
                                  @if ($last->due == 0)
                                    <td>Paid</td>
                                    @else 
                                    <td>Due</td>
                                  @endif
                                </tr>
                              @endforeach

                                
                                </tbody>

                              </table>

                            </div>

                          </div>

                        </div>





                      </div>

                    </div>

                      </div>

                    </div>

        
                    
        <!-- Logout Modal-->
        
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