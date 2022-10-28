<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

use Stripe;
use Charge;


class MainController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except('index');
    }
  
    function index(){
        return view('user.index');
    }
    function dashboard(){
       
            
            return view('user.dashboard');
       
    }
    function stripePayment(Request $request){
        // dd($request);
        \Stripe\Stripe::setApiKey('sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ');
        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 5000,
            'currency' => 'usd',

          ]);
          return back()->with('message','Payment Success');
        // Stripe::setApiKey('sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ');
    
        // Charge::create ([
        //         "amount" => 100 * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Test payment from itsolutionstuff.com." 
        // ]);
      
        // Session::flash('success', 'Payment successful!');
              
        // return back();
    }
}
