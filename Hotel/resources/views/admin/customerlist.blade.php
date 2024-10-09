{{-- @extends('admin.layouts.app')

@section('app')
    

        <!-- Content Wrapper -->
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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                             <i class="fas fa-search fa-sm"></i>
                         </button>
                    </div>
                  </div>

                </form>

                   <!-- Topbar Navbar -->

                   <!-- Nav Item - User Information -->
                   <li class="nav-item dropdown no-arrow">
                       <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                          <img class="img-profile rounded-circle" src="{{asset('image/undraw_profile.svg')}}">
                       </a>


                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


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


                            <a class="dropdown-item" href="room/login">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Login
                            </a>


                            <a class="dropdown-item" href="room/login">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Login
                            </a>


                           @endauth


                         </div>

                        </li>

                    </nav>



        <div class="container">

        <div class="row">


@include('admin.inc.message')


            <div class="col-md-12 d-flex align-items-center justify-content-between">

                <h1 class="customer-fonts-title">Customer List</h1>

                <div class="d-flex align-items-center justify-content-between">

                  <form>


                    <div class="input-group">
                            
                         <input type="text" class="form-control bg-light border-1 small" placeholder="Search a Customer"
                                aria-label="Search" aria-describedby="basic-addon2">
                            
                            <div class="input-group-append">
                                
                                <button class="btn btn-primary" type="button">
                                       <i class="fas fa-search fa-sm"></i>
                                </button>

                            </div>

                    </div> 

                        
                        
                    </form>


                </div>


            </div>


            
            <div class="col-md-12 customer-fonts">

                <div class="table-responsive-md mt-3">

                    <table class="table table-customer">

                        <thead>

                        <tr>
                        <th class="line-gapping">Id</th>
                        <th class="line-gapping">Name</th>
                        <th class="line-gapping">Email</th>
                        </tr>

                        </thead>

                        <tbody>
                          

                          @foreach ($customers as $customer)


                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td class="text-center">
                                  <a href="/admin/customerlist/{{$customer->id}}" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></a>
                                 </td>
                              </tr>


                           @endforeach


                            </tbody>

                        </table>
                        
            </div>

        </div>

        
        </div>


@endsection

     --}}