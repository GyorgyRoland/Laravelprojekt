<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Email;

class EmailSendController extends Controller
{

	public function index()
    {
    	return view('emailsend');
    } 

    public function send(Request $request)
    {   	
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);
        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );
        Mail::to('gyorgyroland39@gmail.com')->send(new SendMail($data));
        $email = new Email([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'message' => $request->input('message')
      ]);

      $email->save();

      //Messeage Email
     return redirect('/home');
        
    }
}
