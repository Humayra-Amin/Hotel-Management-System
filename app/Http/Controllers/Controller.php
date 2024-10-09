<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Barryvdh\DomPDF\Facade\Pdf;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
   
    public function index()
    {


        $categories = Room::get()->groupBy("category_id");


        $roomCounts = [];
        foreach ($categories as $category_id => $rooms) 
        {

            $available = $rooms->where('status', NULL)->count();
            $booked = $rooms->where('status', 'Booked')->count();


            $bookRoomNo =[];
            $ablRoomNo =[];
            foreach($rooms as $room){
                if($room->status == "Booked"){
                    $bookRoomNo[] = $room->roomno;
                } else{
                    $ablRoomNo[] = $room->roomno;
                }
            }
            
            $roomCounts[$category_id] = 
            [
                'Available' => $available,
                'Booked' => $booked,
                'bookRoomNo' => implode(",",$bookRoomNo),
                'ablRoomNo' => implode(",",$ablRoomNo)
            ];
        }


        $bookedCount = Room::where("status", "Booked")->count();
        $ablCount = Room::where("status", null)->count();
        $todayBook = Booking::whereDay('checkInDate', '=', date('d'))->count();
        $todayCheckout = Booking::whereDay('checkOutDate', '=', date('d'))->count();


        $lastFiveBook = Booking::take(5)->get();
      
    

        return view("admin.room.dashboard")->with([
            "roomCounts"=> $roomCounts,
            "bookedCount"=> $bookedCount,
            "ablCount"=> $ablCount,
            "todayBook"=> $todayBook,
            "todayCheckout"=> $todayCheckout,
            "lastFiveBook"=> $lastFiveBook,
        ]);

      
    }

    public function pdf()
    {
        $pdf = Pdf::loadView('pdf');
        return $pdf->download('invoice.pdf');
    }
     
    
}
