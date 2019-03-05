<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
    	$header = 'to jest nagłówek strony kontakt';
    	return view('pages.contact')->with('header', $header);
    }
}
