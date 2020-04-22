<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;  
use App\User;
use Validator; 
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    

	public function login(Request $request)
    {
      	$validator = Validator::make($request->all(), [       	
      		'email' => 'required|email', 
      		'password' => 'required'      
    	]);
    	if ($validator->fails()) { 
      		return response()->json([
      			'error'=> true,
      			'message' => "Hibas adatok",      			
      		]);
    	} 
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                    'error'=>true,
            		'message' => 'Unauthorized!'            		
            ]);
 
        return response()->json([
            'error'=>false,
            'message' => 'Login successfully!'            
        ]);
    }

}
