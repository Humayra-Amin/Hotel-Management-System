<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomBook;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Booking;
use App\Models\Income;
use Carbon\Carbon;

class HomeController extends Controller
{
    //


    public function home()
    {   

        $rooms=Room::all()->unique('category_id')->take(6);

        return view("customer.home")->with('rooms',  $rooms);

    }



    public function singleroom($id, $cat_id)
    { 
     
       $room=Room::where("id",$id)->firstOrfail();
       $cat_id  = Room::select('roomno', 'price', 'discount', 'id')->where([['category_id', $cat_id]])->get();

       return view("customer.singleroom", compact('room', 'cat_id'));

    

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




    public function BookNow(Request $request){
                    
      
            $request->validate([
                'cname' => 'required|max:50',
                'email' => 'required|email',
                'tel' => 'required', 
                'room_id' => 'required',
                'guestnumber' => 'nullable',
                'checkInDate' => 'required|date',
                'checkOutDate' => 'required|date', 
            ]);



        $room = Room::where("id", $request->room_id)->first();
        if(!$room){
            return redirect()->back();
        }


        $booking = new Booking();
        $booking->cname = $request->cname;
        $booking->email = $request->email;
        $booking->tel = $request->tel; 
        $booking->nid = "n/a";
        $booking->room_id = $request->room_id;
        $booking->guestnumber = $request->guestnumber;
        $booking->checkInDate = Carbon::parse($request->checkInDate);
        $booking->checkOutDate = Carbon::parse($request->checkOutDate);
        
        $checkInDate = Carbon::parse($request->checkInDate);
        $checkOutDate = Carbon::parse($request->checkOutDate);
        $numberOfDays = $checkInDate->diffInDays($checkOutDate);


        $price      = (float)$numberOfDays * (float)$room->price;
        $discount   = (float)$numberOfDays * (float)$room->discount;

        $booking->price     = $price;
        $booking->discount  = $discount; 

        $booking->paid = ($request->paid) ? $request->paid : 0 ;
        $booking->due = $price - (float)$booking->discount - (float)$booking->paid;
        $booking->status = 'checkin';
        
        $booking->save();


        $income= new Income();
        $income->reservation_id = $booking->id;
        $income->paid = $request->paid;
        $income->save();


        $room = Room::where('id', $request->room_id)->first();
        $room->status = 'Booked';
        $room->update();

        if($room->update())
            return redirect()->back()->with('msg', "Room Booking Successfully.")->with('status', 'success');
        else
            return redirect()->back()->with('msg', "Something Error! Try again latter.")->with('status', 'danger');
    }  


    public function checkAvailability(Request $request)
    {
    
        $checkInDate =  Carbon::parse($request->input('checkInDate'));
        $checkOutDate =  Carbon::parse($request->input('checkOutDate'));
        $room_id =  $request->input('room_id'); 
        // Check the date is already or not
        $booking = Booking::where('room_id', $room_id)
                            ->where(function ($query) use ($checkInDate, $checkOutDate) {
                                $query->where('checkInDate', '<', $checkOutDate)
                                    ->where('checkOutDate', '>', $checkInDate);
                            })
                            ->first();

        if ($booking) {
            return response()->json(false, 409);
        } else {
            return response()->json(true, 200);
        }
    }

    
    
}

