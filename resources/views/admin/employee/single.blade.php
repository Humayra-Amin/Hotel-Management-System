@extends('admin.layouts.app')
@section('app')

<div id="content-wrapper" class="d-flex flex-column">
    <!-- Topbar -->
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
 

      <h2 class="singleE-h2" style="color: black;">Employee Details</h2>
      <div class="group-container mt-3">
        <div class="group-card-text">
        </div>
          <div class="row">
            <div class="col-12">
            </div>



            <div class="col-3 firt-r fs-5 ">


                <h2 class="group-h2">Employee Name:</h2>
                <p class="para">{{$employee->ename}}</p>


                <h2 class="group-h2">Mother's Name:</h2>
                <p class="para">{{$employee->motherName}}</p>


                <h2 class="group-h2">Gender:</h2>
                <p class="para">{{$employee->gender}}</p>


                <h2 class="group-h2">Present Address:</h2>
                <p class="para">{{$employee->Locality}}</p>


                <h2 class="group-h2">Emergency Contact:</h2>
                <p class="para">{{$employee->emergencyContact}}</p>


                <h2 class="group-h2">Joining Date:</h2>
                <p class="para">{{$employee->joiningdate}}</p>


                <h2 class="group-h2">Salary:</h2>
                <p class="para">{{$employee->salary}}</p>
                

                
            </div>






            <div class="col-3 second-r fs-5">


                <h2 class="group-h2">Email:</h2>
                <p class="para">{{$employee->email}}</p>


                <h2 class="group-h2">Father's Name:</h2>
                <p class="para">{{$employee->fatherName}}</p>


                <h2 class="group-h2">Date of Birth:</h2>
                <p class="para">{{$employee->dob}}</p>


                <h2 class="group-h2">Contact No:</h2>
                <p class="para">{{$employee->phone}}</p>


                <h2 class="group-h2">National ID:</h2>
                <p class="para">{{$employee->nid}}</p>


                <h2 class="group-h2">Position:</h2>
                <p class="para">{{$employee->position}}</p>
                
                

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



