<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
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
            // Authentication passed...
            return redirect()->route('/');
        }
        else{
        	echo 'fail';
        	die;
        	return redirect()->back();
        }
    }

    public function getLogout(){
    	if(Auth::check()){
    		Auth::logout();
    	}
    	return redirect()->route('/');
    }
}
