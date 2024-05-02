<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use DB;
class PaymentController extends Controller
{
    public function razorpay()
    {        
        return view('razorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();
//return $input;
        //$api = new Api(env('rzp_test_WSAbXSPoJM3HVC'), env('NFetjC1vObfnGhAlH7KExHWT'));
    $api = new Api("rzp_test_WSAbXSPoJM3HVC", "NFetjC1vObfnGhAlH7KExHWT");
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
           $message = Session::get('success');
			
			$result=array('txt_id'=>$request->orderid,'user_id'=>$request->user_id,"name"=>$request->name,"email"=>$request->email,"amount"=>$request->amount,"status"=>$message);
              DB::table('payment')->insert($result);
           
		   } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
		//return put('success');
        
        \Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}