<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_value',
        'payment_description',
        'user_id',
    ];

//    protected $hidden = [
//        'user_id',
//        'payment_id',
//    ];
}
