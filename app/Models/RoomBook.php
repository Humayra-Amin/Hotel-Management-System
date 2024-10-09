<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'name ',
        'email ',
        'customer_id',
        'roomcategory',
        'roomtype',
        'capacity',
        'checkin',
        'checkout',
        
       
    ];

    protected $table = 'room_book';
 
      
    protected $guarded = [];


}
