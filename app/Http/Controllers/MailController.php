<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function post(Request $req)
    {
    	$req->validate([
    		'email' => 'required',
    		'subject' => 'required',
    		'message' => 'required'
    	]);

    	$data = [
    		'email'=>$req->email,
    		'subject'=>$req->subject,
    		'bodyMessage'=>$req->message
    	];

    	Mail::send('mail.mail', $data, function($message) use ($data) {
            $message->to(config('mail.from.address'), config('mail.from.name'));
            $message->replyTo($data['email']);
    		$message->subject($data['subject']);
    	});
        
        return 'ok';
    }
}