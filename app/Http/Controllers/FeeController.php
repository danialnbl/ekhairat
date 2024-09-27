<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Toyyibpay;

class FeeController extends Controller
{
    public function submitYuran(Request $request)
    {
        //Validation
//        $request->validate([
//            'payment_value' => 'required', //perlu isi
//            'payment_description' => 'max:50',
//        ]);

        if (Auth::check())
        {
            //store guna mass asignment laravel
            $payment = payment::create([
                'payment_value' => $request->price,
                'payment_description' => $request->description,
                'user_id' => Auth::id(),
        ]);
        }

        return redirect()->route('create:fee',$payment);
    }
    public function createFee(Request $request, payment $payment)
    {
        $code = config('toyyibpay.code');

//        dd($code);

        $bill_object = [
            'billName'=> 'Fee Membership',
            'billDescription'=> 'Class Fee ',
            'billPriceSetting'=> 1,
            'billPayorInfo'=> 1,
            'billAmount'=> 100,
            'billExternalReferenceNo' => '1233test',
            'billTo'=> '$student->name',
            'billEmail'=> 'danialnabil0208@gmail.com',
            'billPhone'=> '01123138061',
        ];

        $data = Toyyibpay::createBill($code, (object)$bill_object);

//        dd($data);

        $bill_code = $data[0]->BillCode;

        return redirect()->route('bill:payment', $bill_code);
    }

    public function billPaymentLink($bill_code)
    {
//        dd($bill_code);
        $data = Toyyibpay::billPaymentLink($bill_code);

        return redirect($data);
    }
}
