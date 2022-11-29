<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $mail_data=[
            'recipient'=> $request->email,
            'fromEmail' => 'gorgonablockchain@gmail.com',
            'fromName' => 'Bienvenido/a',
            'subject'=> 'Contacto',
        ];
        Mail::send('email-template',$mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
            ->from($mail_data['fromEmail'], $mail_data['fromName'])
            ->subject($mail_data['subject']);
    });
    return redirect()->back()->with('success', 'Email');
    }
}
