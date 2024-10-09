<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{


    public function index()
    {

        
        // $categories = Room::select("category_id")->groupBy("category_id")->get();
        // $categories = Room::get();
       
        // return view("admin.room.index")->with('categories',  $categories);
        $rooms = Room::get();
        return view("admin.room.index")->with('rooms',  $rooms);

    }


    // public function roomcategory(Request $request)
    // {

    //     $rooms = Room::get();
    //     return view("admin.room.index")->with('rooms',  $rooms);

    // }


    public function add()
    {   

        $categories = Category::all();
        return view("admin.room.add")->with('categories',  $categories);

    }


    public function single()
    {

        return view("admin.room.single");

    }


    public function store(Request $request)
    {


        $request->validate([
            'roomtitle' => 'required|max:50',
            'roomno' => 'required|integer|unique:rooms',
            'floorno' => 'required',
            'price' => 'required',
            'maxoccupancy' => 'required',
            'category_id' => 'required',
            'roomsize' => 'required',
            'facilities' => 'required',
    

        ]);



        $room = new Room();
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category_id = $request->category_id ;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->status = $request->status;
        $room->save();


        if($request->file('image')){
            foreach($request->file('image') as $img){
                Storage::disk("public")->put("$room->id", $img);


            }
        }

        
        $room->image= Storage::disk("public")->files($room->id);
        $room->update();
        return redirect("admin/room")->with("success", "Room created.");

    }



    public function update(Request $request,$id)
    {   
        $request->validate([
            'roomtitle' => 'required|max:20',
            'roomno' => 'required|integer|unique:rooms,roomno,'.$id,
            'floorno' => 'required',
            'price' => 'required',
            'maxoccupancy' => 'required',
            'category_id' => 'required',
            'roomsize' => 'required',                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
            'facilities' => 'required',

         
        ]);



        $room = Room::find($id);
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category_id = $request->category_id;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->status = $request->status;
        $room->update();

       
       if($request->file('image')){
        foreach($request->file('image') as $img){
            Storage::disk("public")->put("$room->id", $img);
        }

    }

        $room->image= Storage::disk("public")->files($room->id);
        $room->update();
        return redirect("admin/room")->with("success", "Room updated.");

    }

    public function show($id)
    { 

       $room=Room::where("id",$id)->firstOrfail();
       return view("admin.room.single")->with('room',  $room);

    }

    public function edit($id)
    { 

       $room=Room::where("id",$id)->firstOrfail();
       $categories = Category::all();
       return view("admin.room.edit")->with('room',  $room)->with('categories', $categories);

    }


    public function delete(Request $request)
    { 

       Room::destroy($request->id);
       return redirect()->back()->with('success','Record Successfully Deleted');

    }

    
    // discount 
    public function showDiscountValue()
    {   

        $rooms = Room::all()->unique('category_id')->take(6); 
        return view("admin.room.discount")->with('rooms',  $rooms);

    }

    public function updateDiscountValue(Request $request)
    {   
        
        $rooms = Room::where('category_id', $request->category_id)
              ->update(['discount' =>  $request->discount]);
        if($rooms)
            return redirect()->back()->with('msg', "Discount Updated.")->with('status', 'success');
        else
            return redirect()->back()->with('msg', "Something Error! Try again latter.")->with('status', 'danger');

    }


}
