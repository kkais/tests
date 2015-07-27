<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about(){

    	// Different ways of sending data to views

    	//$name = 'Khurram Khawaja';
    	//return view('pages.about')->with('name', $name);

    	$first = 'Khurram';
    	$last = '<span style="color:red">Khawaja</span>';
		//return view('pages.about',['first' => $first, 'last' => $last]);
    	return view('pages.about',compact('first', 'last'));

    	// $data = [];
    	// $data['first'] = $first;
    	// $data['last'] = $last;
    	//return view('pages.about',$data);

    }

    public function contact() {

    	return view('pages.contact');
    }
}
