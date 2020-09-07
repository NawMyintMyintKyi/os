<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;


class PageController extends Controller
{
     public function home($value='')
    {
        $discountItems=Item::where('discount','>',0)->take(6)->get();
       // $items=Item::all();
       $brands=Brand::take(6)->get();
       $categories=Category::take(6)->get();
        return view('home');
    }

    public function mainfun($value='')
    {

        $items=Item::all();
        $brands=Brand::all();
     	return view('main',compact('items','brands'));
    }

     public function brandfun($id)
     {
        $brand=Brand::find($id);
     	return view('brand',compact('brand'));
    }

	public function itemfun($value='')
    {
    	return view('item');
    }

    public function itemdetailfun($id)
    {
        $item = Item::find($id);
        return view('itemdetail',compact('item'));
    }

    public function promofun($value='')
    {
    	return view('promotion');
    }

    public function filteritemfun($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->setRelation('items',$subcategory->items()->pagnate(3));
        return view('filteritem',compact('subcategory'));
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

     public function categoryfun($id)
    {
        $category=Category::find($id);
        return view('category',compact('category'));
    }
}
