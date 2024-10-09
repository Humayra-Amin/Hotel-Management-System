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
  


 <div class="body-change">


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


                        <button class="btn btn-primary ml-4" type="submit">Save Details</button>


                    </form>


                </div>

            </div>


        </div>


 </div>


</div>


@endsection