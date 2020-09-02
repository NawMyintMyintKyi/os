<?php

namespace App\Http\Controllers;

use App\Category;
//use App\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories=Category::all();
        // dd($brands);
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories=Category::all();
        //$subcategories=Subcategory::all();
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);

        //validation
        $request->validate([
            //"brandid"=>'required',
            "name"=>'required',
            "photo"=>'required']);

        //If include file,upload file
        $imageName=time().'-'.$request->photo->extension();
        $request->photo->move(public_path('backend/brandimg'), $imageName);
        $path='backend/brandimg/'.$imageName;

        //Data insert
        $category=new Category;
        //$brand->brandid=$request->brandid;
        $category->name=$request->name;
        $category->photo=$path;
        //$brand->brand_id=$request->brand;
        //$brand->subcategory_id=$request->subcategory;
        $category->save();

        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         //$categories=Category::all();
        //$subcategories=Subcategory::all();
        return view('backend.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         //dd($request);

        //validation
        $request->validate([
            //"categoryid"=>'required',
            "name"=>'required',
            "photo"=>'required']);

        //If include file,upload file
        $imageName=time().'-'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'), $imageName);
        $path='backend/categoryimg/'.$imageName;

        //Data insert
        $category=new Category;
        //$category->categoryid=$request->categoryid;
        $category->name=$request->name;
        $category->photo=$path;
        //$brand->brand_id=$request->brand;
        //$brand->subcategory_id=$request->subcategory;
        $category->save();

        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
