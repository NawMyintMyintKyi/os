<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

				Route::middleware('role:Admin')->group(function(){
				Route::resource('orders','OrderController');

			});
				//backend
		
				Route::middleware('role:Admin')->group(function(){
			   Route::resource('items','ItemController');


			    Route::resource('brands','BrandController');

			    Route::resource('categories','CategoryController');

			    Route::resource('subcategories','SubcategoryController');
			});

			//frontend

			Route::get('register','PageController@registerfun')->name('registerpage');
			 Route::get('itemdetail/{id}','PageController@itemdetailfun')->name('itemdetailpage');

			  Route::get('brand/{id}','PageController@brandfun')->name('brandpage');
			   Route::get('category/{id}','PageController@categoryfun')->name('categorypage');


			Route::get('cart','PageController@cartfun')->name('cartpage');
			Route::get('promotion','PageController@promofun')->name('promotionpage');
			Route::get('main','PageController@mainfun')->name('mainpage');
			Route::get('shoppingcart','PageController@cartfun')->name('shoppingpage');

			Auth::routes();

			Route::get('loginform','PageController@loginfun')->name('loginpage');

			Route::get('/home', 'HomeController@index')->name('home');
