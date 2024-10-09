<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/admin/login', [RoomAuthController::class, 'login'])->name('adminlogin');
Route::post('/admin/post-login', [RoomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/admin/register', [RoomAuthController::class, 'register'])->name('adminregister');
Route::post('/admin/post-register', [RoomAuthController::class, 'postRegister'])->name('register.post'); 
 


Route::middleware(["auth:emps"])->group(function () {

                            //admin.room route
   

    Route::get('admin/', [Controller::class, "index"]);
    Route::get('/admin/room', [RoomController::class, "index"]);
    Route::get('/admin/logout', [RoomAuthController::class, 'logout'])->name('adminlogout');
    Route::get('/admin/room/add', [RoomController::class, "add"]);
    Route::get('/admin/room/{id}', [RoomController::class, "show"]);
    Route::get('/admin/room/{id}/edit', [RoomController::class, "edit"]);
    Route::post('/admin/room', [RoomController::class, "store"]);
    Route::put('/admin//room/{id}', [RoomController::class, "update"]);
    Route::get('/admin/room/{id}/delete/', [RoomController::class, "delete"]);
    Route::get('/admin/room/edit', [RoomController::class, "edit"]);
    Route::get('/admin/room/single', [RoomController::class, "single"]);
    Route::get('/admin/room/roomcategory/{id}', [RoomController::class, "roomcategory"]);



                                //admin.employee route


    Route::get('/admin/employee/', [EmployeeController::class, "index"]);
    Route::get('/admin/employee/add', [EmployeeController::class, "add"]);
    Route::get('/admin/employee/single', [EmployeeController::class, "single"]);
    Route::get('/admin/employee/{id}', [EmployeeController::class, "show"]);
    Route::get('/admin/employee/{id}/edit', [EmployeeController::class, "edit"]);
    Route::get('/admin/employee/{id}/delete', [EmployeeController::class, "delete"]);
    Route::post('admin/employee', [EmployeeController::class, "store"]);
    Route::put('/admin/employee/{id}', [EmployeeController::class, "update"]);



   
                                //admin.booking route


    Route::get('/admin/booking/booklists', [BookingController::class, "booklists"]);
    Route::get('/admin/booking/reservation', [BookingController::class, "reservation"]);
    Route::get('/admin/booking/{id}/editReservation', [BookingController::class, "editReservation"]);
    Route::get('/admin/booking/singleview', [BookingController::class, "singleview"]);
    Route::get('/admin/booking/checkout', [BookingController::class, "checkout"]);
    Route::post('/admin/booking/{id}', [BookingController::class, "search"]);
    Route::get('/admin/booking/{id}', [BookingController::class, "show"]);
    Route::post('admin/booking', [BookingController::class, "store"]);
    Route::put('/admin/booking/{id}', [BookingController::class, "update"]);
    Route::post('/admin/booking/{id}/checkedout', [BookingController::class, "checkedout"])->name('admin.booking.checkedout');
    // Route::post('/admin/booking/{id}/deny', [BookingController::class, "deny"])->name('admin.booking.deny');




    
                                  //admin.category route


    Route::resource('/admin/category', CategoryController::class);
    Route::get('/admin/category/{id}/delete', [CategoryController::class, "delete"]);
    Route::get('/admin/customerlist', [CustomerController::class, "customerlist"]);

});
     
  
                            //customer route

    // Route::get('/login', [CustomerController::class, "login"]);
    // Route::post('/post-login', [CustomerController::class, "postLogin"]);
    // Route::get('/register', [CustomerController::class, "register"]);
    // Route::post('/post-register', [CustomerController::class, "postRegister"]);
   
    Route::get('/services', [CustomerController::class, "services"]);
    Route::get('/contact', [CustomerController::class, "contact"]);
    Route::get('/Allrooms', [CustomerController::class, "Allrooms"]);
    Route::get('/gallery', [CustomerController::class, "gallery"]);
    Route::get('/', [HomeController::class, "home"]);
    Route::get('/singleroom/{id}', [HomeController::class, "singleroom"]);
    Route::get('/aboutus', [HomeController::class, "aboutus"]);
    Route::put('/roombook', [HomeController::class, "roombook"]);



    // Route::middleware(["auth:customers"])->group(function () {
    //     Route::get('/logout', [CustomerController::class, "logout"]);
    //     Route::get('/Account', [CustomerController::class, "Account"]);
    //     Route::get('/changepassword', [CustomerController::class, "changepassword"]);
    //     Route::get('/bookmodal', [CustomerController::class, "bookmodal"]);
    //     Route::get('/bookinglist', [HomeController::class, "bookinglist"]);
    // });


     

                                   //accounts route

    Route::get('/admin/Account/expense', [AccountController::class, "expense"]);
    Route::get('/admin/Account/expenselist', [AccountController::class, "expenselist"]);
    Route::get('/admin/Account/income', [AccountController::class, "income"]);
    Route::post('/admin/Account', [AccountController::class, "store"]);






    Route::get('/pdf', [Controller::class, "pdf"]);

    







