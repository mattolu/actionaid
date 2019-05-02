<?php

namespace App\Http\Controllers;


use App\Donation;
use App\User;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Lang;
use Paystack;
use App\Mail\ReceiptMail;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
    
        $amount = $paymentDetails['data']['amount'];
        $frequency= $paymentDetails['data']['metadata']['frequency'];
      
        $user =Auth::user();
        if(Auth::check()){
          
            $donation = new Donation([
                'frequency' => $frequency,
                'amount' => $amount/100,
                'user_id' =>  Auth::id(),
                
            ]);
            $donation->save();

        // send email for the receipt

            $link = 'http://localhost:8000/donation/create';
            $toEmail = Auth::user()->email;
            Mail::to($toEmail)->send(new ReceiptMail($link));

            // Showing  the instruction
            return view('instruction')
                        ->with('frequency',$frequency)
                        ->with('firstname', $user->firstname)
                        ->with('lastname', $user->lastname);
              
            
            
            
        }

    }
}
