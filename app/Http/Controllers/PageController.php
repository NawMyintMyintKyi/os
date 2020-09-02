<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Item;

class PageController extends Controller
{
    public function mainfun($value='')
    {
    	
    	
        $items=Item::all();
        //dd($items);
    	return view('main',compact('items'));
    }

     public function brandfun($value='')
     {
     	return view('brand');
    }

	public function itemfun($value='')
    {
    	return view('item');
    }

    public function promofun($value='')
    {
    	return view('promotion');
    }

     public function loginfun($value='')
    {
    	
    	return view('login');
    }

     public function registerfun($value='')
    {
        
        return view('register');
    } 

     public function cartfun($value='')
    {
        
        return view('shoppingcart');
    }

     public function categoryfun($value='')
    {
        
        return view('subcategory');
    }
}
