<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toyyibpay;

class testController extends Controller
{
    public function getBankFPX(){
        $data = Toyyibpay::getBanksFPX();

        dd($data);
    }
}
