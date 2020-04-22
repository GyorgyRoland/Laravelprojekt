<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use App\Sms;

class SmsSendController extends Controller
{
	public function index()
    {
    	return view('smssend');
    } 
    public function Smssend(Request $request){
    	Nexmo::message()->send([
    		'to' => '40745603815',
       	'from' => 'NEXMO',
    		'text' => 'Hello NEXMO!'.$request->input('text')
    	]);
    	Session::flash('Sikerult!','Az SMS elkuldve!');
      $sms=new Sms([
        'text' => $request->input('text'),
        'mobile' => '40745603815',
      ]);

      $sms->save();
      return redirect('/home');
    }
}
