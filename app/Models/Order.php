<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'DOB',
        'phonenum',
        'email',
        'address',
        'district',
        'city',
        'total_price',
        'status',
        'message',
        'tracking_no'
    ];
}
