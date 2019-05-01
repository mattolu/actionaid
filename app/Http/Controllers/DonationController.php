<?php

namespace App\Http\Controllers;

use App\Donation;
use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $user_id = Auth::id();
        if (Auth::check()){
            //$user = User::find($user_id);
            $donations =Donation::where('user_id', '=' , $user_id)->get();
            return view('dashboard', compact('donations'));
        }
        return view('auth.login');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()){
            return view('donate');
        }
       return view('auth.login');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        if(Auth::check()){
            $request->validate([
                'frequency'=>'required',
                'amount'=>'required',
              
            ]);
            
            $frequency = $request->get('frequency');
            $donation = new Donation([
                'frequency' => $frequency,
                'amount' => $request->get('amount'),
                 'user_id' =>  $user_id,
                
            ]);
            $donation->save();
            return view('instruction')
                        ->with('frequency',$frequency)
                        ->with('user', $user->firstname)
                        ->with('user1', $user->lastname);
        }
        
    }

  
}
