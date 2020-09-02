<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
     public function backendfun($value='')
    {
    	
    	//dd($route);
    	return view('backend.dashboard');
    }
}
