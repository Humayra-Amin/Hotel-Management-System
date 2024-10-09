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
                   <div class="nav-item dropdown no-arrow">
                       <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                          <img class="img-profile rounded-circle" src="{{asset('image/undraw_profile.svg')}}">
                       </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                          @auth
                            
                                    
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
                           
                           @endauth
                         </div>
                   </div>   
                    </nav>






        <div class="container">


    <div class="row">


@include('admin.inc.message')


            <div class="col-md-12 d-flex align-items-center justify-content-between">

              <h2 class="book-h2">Discount Management</h2>

                <div class="d-flex align-items-center justify-content-between">

                    <form>

                    <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a room No."
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

            @if (session('msg'))  
              <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                {{session('msg')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="col-md-12 book-fonts">

                <div class="table-responsive-md mt-3">

                    <table class="table book-table">

                        <thead>


                        <tr>
                          <th class="book-line-gap">#</th>
                          <th class="book-line-gap">Room Category Name</th>
                          <th class="book-line-gap">Curent Discount Value</th>
                          <th class="book-line-gap">Edit</th>
                        </tr>


                        </thead>

                        <tbody>

                          @php $i = 0; @endphp
                          @foreach ($rooms as $room)

                            <tr>
                              <td>{{$i}}</td>
                              <td>{{$room->roomtitle}}</td>
                              <td>{{$room->discount}}</td>                              
                              <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-select="{{$i}}" class="btn btn-outline-dark btn-pencil btn-edit"><i class="fa-solid fa-pencil"></i></a></td> 
                            </tr>
                            @php $i++; @endphp
                          @endforeach


                            </tbody>

                        </table>

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



    <!-- Discount Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Set Discount Price</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('room.discount') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="">Discount for Rooms Category</label>
            <select name="category_id" id="discount_cat" class="form-select">
              
              @foreach ($rooms as $room)
              <option value="{{ $room->category_id }}" data-discount="{{$room->discount}}">{{$room->category_id}} </option>
              @endforeach  
              
            </select>
          </div>

          <div class="row mb-3">
            <div class="col-6">
              <label for="">Discount Value</label>
              <input type="number" name="discount" class="form-control"  id="discount_value" value="">
            </div>
          </div>

          <div class="">
            <button type="submit" class="btn btn-primary px-5">Update Discount</button>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button> 
      </div>
    </div>
  </div>
</div>

@endsection

@section('myscript')

<script>

  $(function(){

    $(document).on('click', '.btn-edit', function(){
      let cat_no    = $(this).data("select");
      let options   = $('#discount_cat option:eq('+cat_no+')');
          options.prop('selected', true);
      let discount  = options.data('discount')
      $('#discount_value').val(discount);
    })

    // On Change Value
    $(document).on('change', '#discount_cat', function(){
      let discount  =  $(this).children('option:selected').data('discount'); 
      $('#discount_value').val(discount);
    })
    
  });
</script>

@endsection
    