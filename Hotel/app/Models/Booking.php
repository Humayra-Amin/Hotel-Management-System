<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = 
    [
            'cname',
            'email',
            'tel',
            'nid',
            'room_id',
            'guestnumber',
            'checkInDate',
            'checkOutDate',
            'price',
            'discount',
            'paid',
            'due',
            'specialrequest',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class); 
    }

    public function income()
    {
        return $this->hasMany(Income::class, "reservation_id", "id"); 
    }
}
