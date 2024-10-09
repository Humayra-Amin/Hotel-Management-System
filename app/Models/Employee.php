<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'ename', 
        'email', 
        'phone', 
        'image', 
        'emergencyContact',
        'fatherName', 
        'motherName', 
        'Locality', 
        'dob', 
        'nid',
        'position', 
        'gender', 
        'joiningdate', 
        'salary',
        'verified',
        'image',
    ];


    protected $casts = [
        'image' => 'array',
    ];

    
}
