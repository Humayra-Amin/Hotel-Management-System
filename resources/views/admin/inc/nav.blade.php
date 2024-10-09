 <!-- Sidebar -->
 
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon ">
            <i class="fa-solid fa-square-h"></i>
        </div>
        
        <div class="sidebar-brand-text mx-3">Hotel Management</div>
    </a>

   

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
            aria-expanded="true" aria-controls="collapse">
            <i class="fa-sharp fa-solid fa-hotel"></i>
            <span>Hotel Rooms</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="/admin/room">View Room</a>
                <a class="collapse-item" href="/admin/room/add">Add Room</a>
                <a class="collapse-item" href="/admin/discount">Discount Manage</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-person"></i>
            <span>Employee</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="/admin/employee">View Employee list</a>
                <a class="collapse-item" href="/admin/employee/add">Add Employee</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecustomer"
            aria-expanded="true" aria-controls="collapsecustomer">
            <i class="fa-solid fa-users"></i>
            <span>Booking</span>
        </a>
        <div id="collapsecustomer" class="collapse" aria-labelledby="headingcustomer" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Booking:</h6>
                <a class="collapse-item" href="/admin/booking/booklists">Booking List</a>
                <a class="collapse-item" href="/admin/booking/reservation">Add Reservation</a>
                <a class="collapse-item" href="/admin/booking/checkout">Check Out</a>
       
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebooking"
            aria-expanded="true" aria-controls="collapsebooking">
            <i class="fa-solid fa-clipboard-list"></i>
            <span>Account</span>
        </a>
        <div id="collapsebooking" class="collapse" aria-labelledby="headingbooking" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Account:</h6>
                <a class="collapse-item" href="/admin/Account/expense">Expense</a>
                <a class="collapse-item" href="/admin/Account/expenselist">Expense List</a>
                <a class="collapse-item" href="/admin/Account/income">Income</a>
           
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    

</ul>



<!-- End of Sidebar -->

