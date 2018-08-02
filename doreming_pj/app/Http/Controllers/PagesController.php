<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
    	return view('pages.home');
    }

    public function getRegisterPage(){
    	return view('pages.register');
    }

    public function getLayoutEditor(){
      return view('pages.format-editor');
    }
}
