 
@extends('admin.layouts.app')
@section('app')
<div id="content-wrapper" class="d-flex flex-column">


    <!-- Main Content -->
    <div id="content">

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

       @include('admin.inc.message')

                 <div class="container mt-3">
                          <h2 class="text-left">Add Rooms</h2>
                       
                    <form action="{{ url('/admin/room') }}" method="POST" enctype="multipart/form-data">
                      @csrf
  
                      <div class="addroom-row addroom-jumbotron box8">
                        
                        <div class="custom-form-inner">
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomtitle">Room Title</label>
                              <input type="text" class="form-control" name="roomtitle" id="roomtitle" placeholder="Enter Room Name">
                            </div>

                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomno">Room No</label>
                              <input type="number" class="form-control" name="roomno" id="roomno" placeholder="Enter Room No." required>
                            
                            </div>

                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="floorno">Floor No</label>
                              <input type="text" class="form-control" name="floorno" id="floorno" placeholder="Enter Floor No." required>
                            </div>

                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomsize">Room Size</label>
                              <input type="text" name="roomsize" class="form-control" id="number" placeholder="Enter Room size" required>
                            
                            </div>


                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="Category">Category</label>
                              <select name="category_id" class="form-control custom-select browser-default">
                                <option>Select your Room Category</option>


                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Couple Room">Couple Room</option>
                                <option value="VIP Room">VIP Room</option>
                                
                            </select>
                            </div>
                            
            
                            
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="maxoccupancy">Number Of Guest</label>
                              <input type="text" class="form-control" name="maxoccupancy" id="maxoccupancy" placeholder="Enter no of guest." required>
                            </div>


                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomview">Room View</label>
                              <select name="roomview" class="form-control custom-select browser-default">
                              <option>Select View</option>
                              <option>Sea View</option>
                              <option>Mountain View</option>
                              <option>Road View</option>
                              </select>
                            </div>

                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="price">Price</label>
                              <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price." required>
                            </div>


                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="facilities">Facilities</label>
                              <select name="facilities[]" class="form-control custom-select browser-default" multiple>
                              <option>Free Wi-Fi</option>
                              <option>Flat-screen TV</option>
                              <option >Mini Fridge</option>
                              <option >24 Hour security</option>
                              <option >Free Room Service</option>
                              </select>
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="guestservice">Special Service</label>
                              <select name="guestservice[]" class="form-control custom-select browser-default" multiple>
                           
                              <option>Coffee Maker</option>
                              <option>Fruit Basket</option>
                              <option>Dry fruits, nuts & chocolates</option>
                              <option>Laundry service</option>
                              <option>Hairdyers</option>
                              <option>Extra stationery</option>
                              <option>Towelled slippers</option>
                              <option>Bath Robe</option>
                              </select>
                            </div>

                        
                            <div class="col-sm-12">
                              <div class="upload__box">
                                <div class="upload__btn-box">
                                  <label class="upload__btn">
                                    Upload Room Images
                                    <input  name="image[]" type="file" multiple data-max_length="20" class="upload__inputfile">
                                  </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                              </div>
                            </div>
    
                      
                      
                            <div class="col-sm-12 form-group mb-0">
                              <button class="btn btn-primary btn-lg float-right add-room-btn">Submit</button>
                            </div>
                        </div>
                  
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