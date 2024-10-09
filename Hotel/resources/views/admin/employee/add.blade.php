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




<h2 class="custom-h2">Add Employee</h2>
  

       <form action="{{ url('/admin/employee') }}" method="POST" enctype="multipart/form-data">
                      @csrf


    <div class="add-row files-jumbotron custom-box8">
      

      
      <div class="col-sm-3 form-group">
    <h2 class=" text-font ">Personal Information</h2>
</div>


<div class="col-md-6 form-group custom-input-file ">


                    <div class="d-flex align-items-center justify-content-start">

                      <img id="file_upload" src="http://placehold.it/100" alt="your image" class="custom-upload-img" />

                      <div class="custom-input-file-upload">

                        <span class="custom-upload-label">Upload Image</span>

                        <input type='file' name="image" onchange="readURL(this);" />

                      </div>

                    </div>

                  </div>



      <div class="col-sm-6  form-group">
        <label for="ename" class="custom-label">Employee Name</label>
        <input type="text" class="form-control" name="ename" id="ename" placeholder="Employee name" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="email" class="custom-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email." required>
      </div>




      <div class="col-sm-6 form-group">
        <label for="tel" class="custom-label">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Contact Number." required>
      </div>




      <div class="col-sm-6 form-group">
        <label for="emergencyContact" class="custom-label">Emergency Contact</label>
        <input type="text" name="emergencyContact" class="form-control" id="emergencyContact" placeholder="Emergency Contact" required>
    </div>




      <div class="col-sm-6 form-group">
        <label for="fatherName" class="custom-label">Father's Name</label>
        <input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Father's Name" required>
    </div>




    <div class="col-sm-6 form-group">
        <label for="motherName" class="custom-label">Mother's Name</label>
        <input type="text" name="motherName" class="form-control" id="motherName" placeholder="Mother's Name" required>
    </div>



 
      <div class="col-sm-6 form-group">
        <label for="address-1" class="custom-label">Present Address</label>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="Date" class="custom-label">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="email" class="custom-label">National Id</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="NID" required>
      </div>


      

      <div class="col-sm-6 form-group">
        <label for="position" class="custom-label">Position</label>
        <select class="form-control custom-select browser-default" name="position">
        <option >Select your Position</option>
      <option>Manager</option>
      <option>Assistant Manager</option>
      <option >Accountent</option>
      <option >Receptionist</option>
      <option >Security</option>
      <option >Room Service</option>
      <option >Janitor</option>
        </select>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="gender" class="custom-label">Gender</label>
        <select id="gender" class="form-control browser-default custom-select" name="gender">
        <option >Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Others</option>
        </select>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="Date" class="custom-label">Joining Date</label>
        <input type="Date" name="joiningdate" class="form-control" id="jdate" placeholder="" required>
      </div>
      


      
      <div class="col-sm-6 form-group">
        <label for="Salary" class="custom-label">Salary</label>
        <input type="number" name="salary" class="form-control" id="Salary" placeholder="Enter Salary" required>
      </div>




      {{-- <div class="col-sm-12">
        <input type="checkbox" class="form-check-input ml-1" id="chb" required>
        <label for="chb" class="form-check-label custom-label ml-4">I accept all terms and conditions.</label>
      </div> --}}




      
      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div>
  
      


      
    </div>


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