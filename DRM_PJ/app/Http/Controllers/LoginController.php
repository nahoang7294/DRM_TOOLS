<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function getLogin(){
		return view('client.content');
    }

    public function postLogin(Request $request){
    	$login = [
    		'email' => $request->email,
    		'password' => $request->password
    	];
    	if (Auth::attempt($login)) {	

	  		$request->session()->put('login', true);
	  		$request->session()->put('name', Auth::user()->personal_in_charge);
	        $request->session()->put('email', $request->email);
	        $request->session()->put('user_id', Auth::user()->id);
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
    		Session::flush();
    		Auth::logout();
    	}
    	return redirect()->route('/');
    }
}
