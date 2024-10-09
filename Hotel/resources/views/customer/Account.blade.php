@extends('customer.layouts.apps')
@section('apps')
@include('admin.inc.message')


<!-- Sidebar -->
<div class="sidebar">
    <i class='fa fa-user-circle user-icon'></i><p class="user-name">Abdhur Rahman</p>
    <!-- Row 1 -->
    <div class="row">
  
  
        <!-- Card 1: Booking History -->
        <div class="col-sm-6">
            <div class="card customer-ml">
                    <i class="fa fa-list icon-customer"></i>
                    <p class="font-customer "> <a href="/bookinglist">Booking List</a></p>
        </div>
    </div>
  
  
  
  
        <!-- Card 2: Change Password -->
        <div class="col-sm-6">
            <div class="card customer-mr">
                    <i class="fa fa-key icon-customer"></i>
                    <p class="font-customer"> <a href="/changepassword">Change Password</a></p>
            </div>
        </div>
   
  
  
  
        <!-- Card 3: Profile Information -->
        <div class="col-sm-6">
            <div class="card customer-ml my-3">
                    <i class="fa fa-address-card icon-customer"></i>
                    <p class="font-customer"> <a href="/Account">Account</a></p>
            </div>
        </div>
  </div>
  
  
  
  
  
  
    <!-- Sign-out button -->
    <div class="sign-out-customer">
        <button class="btn btn-danger">Sign Out</button>
    </div>    
  </div>
  




{{-- <div class="container-xl complex px-4 mt-4"> --}}


 <div class="body-change">


    {{-- <div class="row g-0"> --}}


        {{-- <div class="col-xl-4">


            <div class="file-card mb-10 mb-xl-0">


                <div class="custom-card-header">Profile Picture
                </div>


                <div class="custom-card-body text-center">
                 

                    <div class=" files-img">
                      

                        <div class="imageWrapper">
                          <img class="image-info" src="http://via.placeholder.com/700x500">
                        </div>


                      </div>


                      <p class="text-center para">ABC</p>


                    <button class="file-upload">            
                        <input type="file" class="file-input">Upload Image</button>


                </div>


            </div>


                
        </div> --}}


        <div class="col-xl-8">


            <div class="file-card mb-4">

                <div class="custom-card-header">Personal Information</div>


                <div class="custom-card-body">


                    <form>

                        <div class="account-row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputFirstName" name="name" type="text" placeholder="Name" value="{{auth()->user()->name}}">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputEmailAddress" name="email" type="text" placeholder="Email Address" value="{{auth()->user()->email}}">
                            </div>

                        </div>



                        {{-- <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputEmailAddress" type="text" placeholder="Email Address" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputPhoneNumber" type="text" placeholder="Phone Number" value="">
                            </div>

                        </div> --}}



                        {{-- <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputZip" type="text" placeholder="Zip" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputCountry" type="text" placeholder="Country" value="">
                            </div>

                        </div> --}}



{{-- 
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputState" type="text" placeholder="State" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputCity" type="text" placeholder="City" value="">
                            </div>
                        </div> --}}



                        
                        <button class="btn btn-primary ml-4" type="submit">Save Details</button>


                    </form>


                </div>

            </div>


        </div>


    {{-- </div> --}}


 </div>


</div>


@endsection