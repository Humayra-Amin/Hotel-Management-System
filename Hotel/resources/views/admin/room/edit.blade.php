  
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
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        
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
                        <a class="dropdown-item" href="admin/login">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Login
                        </a>
                    @endauth

                    
                </div>
              </div>   
          </nav>



                  <div class="container mt-3">
                            <h2 class="text-info1">Edit Rooms</h2>
                        

                            @include('admin.inc.message')



                      <form action="/admin/room/{{$room->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="editroom-row editroom-jumbotron box8">
                          
                          <div class="customedit-form-inner">
                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="roomtitle">Room Title</label>
                                <input type="text" class="form-control" name="roomtitle" id="room-title" placeholder="Enter Room Name" value="{{$room->roomtitle}}" required>
                              </div>

                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="roomno">Room No.</label>
                                <input type="number" class="form-control" name="roomno" id="room-no" placeholder="Enter Room No." value="{{$room->roomno}}" required>
                              </div>

                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="buildingno">Floor No.</label>
                                <input type="text" class="form-control" name="floorno" id="room-no" placeholder="Enter Floor No." value="{{$room->floorno}}" required>
                              </div>

                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="size">Room Size</label>
                                <input type="text" name="roomsize" class="form-control" id="number" placeholder="Enter Room size" value="{{$room->roomsize}}" required>
                              </div>

              
                              
                            <div class="col-sm-6 form-group customedit-form-group">
                              <label for="Category">Category</label>
                              <select name="category_id" class="form-control custom-select browser-default">
                                <option>Select your Room Category</option>
                                {{-- @foreach ($categories as $category)
                                <option value="{{$category->id}}"> {{$category->categoryname}} </option>
                                @endforeach --}}


                                <option @if($room->category_id=="Single Room") selected @endif>Single Room</option>
                                <option @if($room->category_id=="Double Room") selected @endif>Double Room</option>
                                <option @if($room->category_id=="Couple Room") selected @endif>Couple Room</option>
                                <option @if($room->category_id=="VIP Room")  selected @endif>VIP Room</option>
                                
                            </select>
                            </div>                              
                          

                              
                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="maxoccupancy">Number Of Guest</label>
                                <input type="text" class="form-control" name="maxoccupancy" id="maxoccupancy" placeholder="Enter no of guest." value="{{$room->maxoccupancy}}" required>
                              </div>


                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="view">Room View</label>
                                <select name="roomview" class="form-control custom-select browser-default">
                                <option>Select View</option>
                                <option @if($room->roomview == 'Sea View') selected @endif>Sea View</option>
                                <option @if($room->roomview == 'Mountain View') selected @endif>Mountain View</option>
                                <option @if($room->roomview == 'Mountain View') selected @endif>Road View</option>
                                </select>
                              </div>

                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="price">Price.</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price."  value="{{$room->price}}" required>
                              </div>


                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="guestservice">Special Service</label>
                                <select name="guestservice[]" class="form-control custom-select browser-default" multiple>
                                {{-- <option value="{{$room->guestservice[0]}}"></option> --}}
                              
                                <option @if($room->guestservice[0]) {{in_array("Coffee Maker",$room->guestservice) ? 'selected' : '' }} @endif>Coffee Maker</option>
                                <option @if($room->guestservice[0]) {{ in_array("Fruit Basket",$room->guestservice) ? 'selected' : '' }} @endif>Fruit Basket</option>
                                <option @if($room->guestservice[0]) {{ in_array("Dry fruits, nuts & chocolates",$room->guestservice) ? 'selected' : '' }} @endif>Dry fruits, nuts & chocolates</option>
                                <option @if($room->guestservice[0]) {{ in_array("Laundry service",$room->guestservice) ? 'selected' : '' }} @endif>Laundry service</option>
                                <option @if($room->guestservice[0]) {{ in_array("Hairdyers",$room->guestservice) ? 'selected' : '' }} @endif>Hairdyers</option>
                                <option @if($room->guestservice[0]) {{ in_array("Extra stationery",$room->guestservice) ? 'selected' : '' }} @endif>Extra stationery</option>
                                <option @if($room->guestservice[0]) {{ in_array("Towelled slippers",$room->guestservice) ? 'selected' : '' }} @endif>Towelled slippers</option>
                                <option @if($room->guestservice[0]) {{ in_array("Bath Robe",$room->guestservice) ? 'selected' : '' }} @endif>Bath Robe</option>

                                </select>
                              </div>


                              <div class="col-sm-6 form-group customedit-form-group">
                                <label for="view">Facilities</label>
                                <select name="facilities[]" class="form-control custom-select browser-default" multiple>
                                  {{-- <option value="{{$room->facilities}}">Select Facilities</option> --}}
                                <option {{in_array("Free Wi-Fi",$room->facilities) ? 'selected' : '' }}>Free Wi-Fi</option>
                                <option {{in_array("Flat-screen TV",$room->facilities) ? 'selected' : '' }}>Flat-screen TV</option>

                                <option {{in_array("Pool",$room->facilities) ? 'selected' : '' }}>Mini Fridge</option>
                                <option {{in_array("24 Hour security",$room->facilities) ? 'selected' : '' }}>24 Hour security</option>
                                <option {{in_array("Car parking",$room->facilities) ? 'selected' : '' }}>Free Room Service</option>
                              
                              </div>


                    
                            
                  
                            <div class="col-sm-12">
                            <div class="uploadedit__box">
                              <div class="uploadedit__btn-box">
                                  <label class="uploadedit__btn">
                                    @if ($room->image)
                                    @foreach ($room->image as $img)
                                    <div>
                                        <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
                                    </div>
                                    @endforeach
                                 @endif
                                      Upload Room Image     
                                  <input  name="image[]" type="file" multiple data-max_length="20" class="uploadedit__inputfile">
                                  </label>
                              </div>
                              <div class="uploadedit__img-wrap"></div>
                            </div>
                            </div>
                          
                          
                        
                              <div class="col-sm-12 form-group mb-0">
                                <button class="btn btn-primary btn-lg float-right edit-room-btn">Update Room</button>
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