<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

   
      
    protected $fillable = [
        'roomtitle',
        'roomno',
        'floorno',
        'price',
        'category_id',
        'roomsize',
        'roomview',
        'facilities',
        'guestservice',
        'image',
        'status',
        'discount',
       
    ];


    protected $casts = [
        'image' => 'array',
        'guestservice' => 'array',
        'facilities' => 'array',
    ];


    public function booking(){
        return $this->hasMany(Booking::class);
    }

}
