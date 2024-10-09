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
  
        



        <div class="container">


        <div class="row">
            

            <div class="col-md-12 d-flex align-items-center justify-content-between">

                <h2>Employee</h2>


@include('admin.inc.message')


                <div class="d-flex align-items-center justify-content-between">


                    <form>


                    <div class="input-group">

                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a employee"
                                aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>

                            </div>

                    </div> 


                </form>

                
                    <a class="btn btn-outline-dark ml-2" href="employee/add">
                    <i class="fa fa-plus"></i>
                    Add Employee
                    </a>


                </div>


            </div>
            


            <div class="col-md-12 customize-fonts">

                <div class="table-responsive-md mt-3">

                    <table class="table">

                        <thead>

                        <tr>

                        <th scope="row">
                        

                        <div class="form-check-left">
                            <label class="form-check-label" for="flexCheckIndeterminate"></label>
                        </div>

                        </th>



                <th scope="col">Employee Name</th>
                <th scope="col">Joining</th>
                <th scope="col">Position</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th></th>
                 

                        </tr>
                        </thead>
                        <tbody>


                            
                        @foreach ($employees as $employee)
        

                            <tr>
                                <td scope="row">    
                                <div class="form-check-left">
                                    <label class="form-check-label" for="flexCheckIndeterminate"></label>
                                </div>
                              </th>



                    <td>{{$employee->ename}}</td>
                    <td>{{$employee->joiningdate}}</td>
                    <td>{{$employee->position}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td> 
                    
                    
                              
                                <td class="text-right">
                                <div class="d-flex">
                                <a href="/admin/employee/{{$employee->id}}" title="view" class="btn btn-outline-primary btn-eye my-2"><i class="fa-solid fa-eye"></i></a>
                                <a href="/admin/employee/{{$employee->id}}/edit/" title="edit" class="btn btn-outline-dark btn-pencil mx-2 my-2 "><i class="fa-solid fa-pencil"></i></a>
                                
                                <form action="/admin/employee/{{$employee->id}}/delete/" method="DELETE">
                                    <button type="submit" title="delete" class="btn btn-outline-danger btn-trash mb-1  my-2"><i class="fa-solid fa-trash"></i></button>
                                </form>


                            </div>


                            </td>



                          </tr>


                        @endforeach



                        </tbody>


                    </table>


                </div>


                <div class="pagination justify-content center mt-2 mb-2">

                   
                  </div>


                  <div>
                    <ul class="pagination rounded-circle justify-content-center mt-2 mb-4">
                      <li class="page-item"><a class="page-link" href="#">&Lang;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">&Rang;</a></li>
                    </ul>
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

    