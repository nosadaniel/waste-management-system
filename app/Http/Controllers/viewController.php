<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
    	return view('pages.home');
    }
    public function contactPage(){
    	return view('pages.contact');
    }
}
