<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$categories = Category::all();
    	return view('category')->with('categories', $categories);
    }

    public function addCategory(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'price' => 'required'
    	]);

    	$category = new Category;
    	$category->cat_name = $request->input('name');
    	$category->cat_price = $request->input('price');
    	$category->save();
    	return redirect()->route('category.index');
    }
}
