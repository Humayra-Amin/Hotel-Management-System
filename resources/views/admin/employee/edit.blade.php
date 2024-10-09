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
          </li>   
        </nav>





  <div class="container mt-3">

    <h2 class="form-h2">Edit Employee</h2>


  <form action="/admin/employee/{{$employee->id}}" method="POST" enctype="multipart/form-data">
      @csrf


      @method ('PUT')

      
    <div class="edit-row form-jumbotron form-box8">
      

      
          <div class="col-sm-3 form-group">
        <h2 class="form-text-color">Personal Information</h2>
    </div>



  <div class="col-md-6 form-group form-input-file" >


    <div class="d-flex align-items-center justify-content-start">


      @foreach ($employee->image as $image)

            <img id="file_upload" src="{{Storage::disk("public")->url($image)}}" alt="your image" class="form-upload-img" />
      
            @endforeach


                <div class="form-input-file-upload">
                  <span class="form-upload-label">Upload Image</span>
                  <input type='file' name="image" onchange="readURL(this);" />
                </div>


          </div>


  </div>


    
      <div class="col-sm-6  form-group">
        <label for="ename" class="form-label">Employee Name</label>
        <input type="text" class="form-control" name="ename" id="ename" placeholder="Employee name" value="{{$employee->ename}}" required>
      </div>
      




      <div class="col-sm-6 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{$employee->email}}" required>
      </div>





      <div class="col-sm-6 form-group">
        <label for="tel" class="form-label">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number" value="{{$employee->phone}}" required>
      </div>   
      
      


        <div class="col-sm-6 form-group">
          <label for="emergencyContact" class="form-label">Emergency Contact</label>
          <input type="text" name="emergencyContact" class="form-control" id="emergencyContact" placeholder="Emergency Contact" value="{{$employee->emergencyContact}}" required>
      </div>



    

      <div class="col-sm-6 form-group">
        <label for="fatherName" class="form-label">Father's Name</label>
        <input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Father's Name" value="{{$employee->fatherName}}" required>
    </div>




      <div class="col-sm-6 form-group">
          <label for="motherName" class="form-label">Mother's Name</label>
          <input type="text" name="motherName" class="form-control" id="motherName" placeholder="Mother's Name" value="{{$employee->motherName}}" required>
      </div>




      <div class="col-sm-6 form-group">
        <label for="address-1" class="form-label">Present Address</label>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." value="{{$employee->Locality}}" required>
      </div>
      




      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" value="{{$employee->dob}}" required>
      </div>





      <div class="col-sm-6 form-group">
        <label for="email" class="form-label">National Id</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" value="{{$employee->nid}}" required>
      </div>
      



    
      <div class="col-sm-6 form-group">
        <label for="position" class="form-label">Position</label>
        <select class="form-control custom-select browser-default" name="position">
          <option >Select your Position</option>
              <option @if($employee->position == 'Manager') selected @endif>Manager</option>
              <option @if($employee->position == 'Assistant Manager') selected @endif>Assistant Manager</option>
              <option @if($employee->position == 'Accountent') selected @endif>Accountent</option>
              <option @if($employee->position == 'Receptionist') selected @endif>Receptionist</option>
              <option @if($employee->position == 'Security') selected @endif>Security</option>
              <option @if($employee->position == 'Room Service') selected @endif>Room Service</option>
              <option @if($employee->position == 'Janitor') selected @endif>Janitor</option>
        </select>
      </div>
      


    
      <div class="col-sm-6 form-group">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" class="form-control browser-default custom-select" name="gender">
          <option >Select Gender</option>
          <option @if($employee->gender == 'Male') selected @endif>Male</option>
          <option @if($employee->gender == 'Female') selected @endif>Female</option>
          <option @if($employee->gender == 'Others') selected @endif>Others</option>
        </select>
      </div>
    

     
      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Joining Date</label>
        <input type="Date" name="joiningdate" class="form-control" id="jdate" placeholder="" value="{{$employee->joiningdate}}" required>
      </div>      

    

     
      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Salary</label>
        <input type="number" name="salary" class="form-control" id="Salary" placeholder="" value="{{$employee->salary}}" required>
      </div>      

    
      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Update</button>
      </div>


    </div>


  </form>
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

