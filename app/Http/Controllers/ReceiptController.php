<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mail\ReceiptMail;

class ReceiptController extends Controller{

    public function sendReceipt(){
        $link = 'Hi, This test feedback.';
        $toEmail = Auth::user()->email;
        Mail::to($toEmail)->send(new ReceiptMail($link));
    
    return 'Email has been sent to '. $toEmail;
    }
}

//Notification
// {/**
//      * URL token.
//      *
//      * @var string
//      */
//     public $token;

//     /**
//      * Create a new notification instance.
//      *
//      * @return void
//      */
//     public function __construct($token)
//     {
//         $this->token = $token;
//     }
    
//     /**
//      * The callback that should be used to build the mail message.
//      *
//      * @var \Closure|null
//      */
//     public static $toMailCallback;

//     /**
//      * Create a notification instance.
//      *
//      * @param  string  $token
//      * @return void
//      */
    
//     /**
//      * Get the notification's channels.
//      *
//      * @param  mixed  $notifiable
//      * @return array|string
//      */
//     public function via($notifiable)
//     {
//         return ['mail'];
//     }

//     /**
//      * Build the mail representation of the notification.
//      *
//      * @param  mixed  $notifiable
//      * @return \Illuminate\Notifications\Messages\MailMessage
//      */
//     public function toMail($notifiable)
//     {
//         if (static::$toMailCallback) {
            
//             return call_user_func(static::$toMailCallback, $notifiable);
//         }

//         return (new MailMessage)
//             ->subject(Lang::getFromJson('Donation Receipt'))
//             ->line(Lang::getFromJson('You are receiving this email because you made a donation at actionaid.'))
//             ->action(Lang::getFromJson('Print Receipt'), url(config('app.url').route('receipt', ['token' => $this->token], false)));
//             // ->line(Lang::getFromJson('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.users.expire')]))
//             // ->line(Lang::getFromJson('If you did not request a password reset, no further action is required.'));
//     }

//     /**
//      * Set a callback that should be used when building the notification mail message.
//      *
//      * @param  \Closure  $callback
//      * @return void
//      */
//     public static function toMailUsing($callback)
//     {
//         static::$toMailCallback = $callback;
//     }
// }
