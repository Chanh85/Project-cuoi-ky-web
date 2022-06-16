<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'name',
        'picture_1',
        'picture_2',
        'picture_3',
        'picture_4',
        'quantity',
        'description',
        'price'
    ];


}
