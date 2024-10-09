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





    <div class="change-body">

      <form action="{{url('/updatepassword')}}" method="POST">
       @csrf
        <h2 class="text-center texts">CHANGE PASSWORD</h2>

        <div class=" change-password-form">

          <div class=" form-group">
              <input type="password" class="labelp" id="old-password" placeholder="OLD PASSWORD" name="old_password" required>
          </div>


          <div class="form-group">
                <input type="password" class="labelp" id="new-password" placeholder="NEW PASSWORD" name="password" required>
          </div>


          <div class="form-group">
                <input type="password" class="labelp" id="confirm-password" placeholder="CONFIRM PASSWORD" name="password_confirmation" required>
          </div>

        </div>



        <div class="d-flex justify-content-center">
            <input type="submit" value="Change Password">
        </div>
      


      
  </div>


</form>


</div>


@endsection

