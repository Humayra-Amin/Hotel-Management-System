@extends('admin.layouts.app')


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
                                    <a class="dropdown-item" href="admin/room/login">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Login
                                    </a>
                                    
                                @endauth

                                
                            </div>
                        </div>   
                    </nav>
  
        

        <div class="container">
        <div class="row">
            


            @include('admin.inc.message')


            <div class="col-md-12 d-flex align-items-center justify-content-between">
                <h2>Rooms</h2>
                <div class="d-flex align-items-center justify-content-between">
                    <form>
                    <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a room"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                    </div> 
                        
                        
                        <!-- <input type="text" placeholder="Search a room"> -->
                    </form>
                    <a class="btn btn-primary ml-3" href="/admin/room/add">
                        <i class="fa fa-plus"></i>
                         Add Room 
                    </a>
                </div>
            </div>
            
            <div class="col-md-12 customize-fonts table-line">
                <div class="table-responsive-md mt-3">
                    <table class="table">
                        <thead>
                        <tr>
                    
                        <th class=col-md-2>Room no</th>
                        <th class=col-md-2>Room Title</th>
                        <th class=col-md-2>Floor No</th>
                
                        <th class=col-md-2>Price</th>
                        <th class=col-md-2>Status</th>
                        <th class=col-md-2></th>
                        </tr>
                        </thead>
                        <tbody>


                            
                    @foreach ($rooms as $room)
        

                            <tr>
                                <td>{{$room->roomno}}</td>  
                                <td>{{$room->roomtitle}}</td>  
                                <td>{{$room->floorno}}</td>
                                <td>{{$room->price}}</td> 
                                
                                @if ($room->status)
                                <td>{{$room->status}}</td>

                                @else
                                <td>Available</td>

                                @endif
                                <td class="text-center">
                                <div class="d-flex">
                                <a href="/admin/room/{{$room->id}}" title="view" class="btn btn-outline-primary btn-eye my-2 "><i class="fa-solid fa-eye"></i></a>
                                <a href="/admin/room/{{$room->id}}/edit/" title="edit" class="btn btn-outline-dark btn-pencil mx-2 my-2"><i class="fa-solid fa-pencil"></i></a>
                                
                                <form action="/admin/room/{{$room->id}}/delete/" method="DELETE">
                                <button type="submit" title="delete" class="btn btn-outline-danger btn-trash mb-2"><i class="fa-solid fa-trash"></i></button>
                                </form> 


                                </div>
                                
                            </td>

                             </tr>
                            

                        @endforeach
                        </tbody>
                    </table>
                </div>

                
                  <div>
                    <ul class="pagination rounded-circle justify-content-center mt-2 mb-4">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
          
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
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

    