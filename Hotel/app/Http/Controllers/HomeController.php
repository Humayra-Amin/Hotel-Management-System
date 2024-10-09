<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //


    public function home()
    {   

        $rooms=Room::all()->take(6);
        return view("customer.home")->with('rooms',  $rooms);

    }



    public function singleroom($id)
    { 

       $room=Room::where("id",$id)->firstOrfail();
       return view("customer.singleroom")->with('room',  $room);

    }

    public function aboutus()
    {
       return view("customer.aboutus");
    }



    public function roombook(Request $request, $id)
    { 

       $room=Room::where("id",$id)->firstOrfail();

        $roombook = new RoomBook();
        $roombook->room_id = $id;
        $roombook->book = 1;
        $roombook->save();
        
        $room->availablerooms = $room->availablerooms - 1;
        $room->update();
        
        
        return redirect("singleroom/$room->id")->with("success", "Room booked.");

    }



    public function bookinglist()
    { 

        $booklist = Customer::all();
        return view("customer.bookinglist")->with('booklist',  $booklist);
    
    }



    public function store(Request $request)
    {

    $request->validate([
        'price' => 'required',
        'name' => 'required',
        'email' => 'required',
        'roomcategory'=>'required',
        'roomtype' => 'required',
        'capacity' => 'required',
        'checkin' => 'required',
        'checkout' => 'required',

        ]);

        $booking=new RoomBook();
        $booking->price = $request->price;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->customer_id = auth()->user()->id;
        $booking->roomcategory = $request->roomcategory;
        $booking->roomtype = $request->roomtype;
        $booking->capacity = $request->capacity;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->save();

        return redirect("booking")->with("success", "Room Booked listed");

    }

    
}
