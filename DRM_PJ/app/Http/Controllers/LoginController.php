<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
    	if(!Auth::check()){
	    	return view('client.content');    			
    	}
    }

    public function postLogin(Request $request){
    	$login = [
    		'email' => $request->email,
    		'password' => $request->password
    	];
    	if (Auth::attempt($login)) {	
    		return response()->json(
    			[
	                'error' => false,
	                'message' => 'success'
	            ], 200);
            //return redirect()->route('/');
        }
        else{
        	$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return response()->json(
            	[
                'error' => true,
                'message' => $errors
                ], 200);
        	// return redirect()->back();
        }
    }

    public function getLogout(){
    	if(Auth::check()){
    		Auth::logout();
    	}
    	return redirect()->route('/');
    }
}
