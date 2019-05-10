<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\First_meal;
use App\Second_meal;
use App\Salad;
use App\Category;


class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('menu');
    }
    // ****** Scripts for Accessing First Meals

    public function getFirstMeal()
    {	
    	$meals = DB::table('first_meals AS f')
    			->select('f.first_id', 'f.first_name', 'f.first_img','c.cat_name')
    			->join('category_list AS c', 'f.first_cat_id', '=' , 'c.cat_id')
    			->get();
    	 

    	return view('first' , compact('meals'));
    }

    public function deleteFirst($id = null)
    {
    	if( $id != null){
	    	$data = First_meal::find($id)->delete();
	    	return redirect()->route('menus.first');
    	}
    	else 
    		return  redirect()->route('menus.first');
    }

    public function editFirst( $id = null)
    {
    	$meal = First_meal::find($id);
    	$categories = Category::select('cat_id','cat_name')->get();

		return view('edits.editFirst', compact('meal','categories'));
    }

    public function updateFirst(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'cat_id' => 'required',
    		'img' => 'image'
    	]);
    	$id = $request->input('id');
    	// return $request;
    	// Handle Image
    	if($request->hasFile('img')){
    		// Get filename with the extension
    		$filenameWithExt = $request->file('img')->getClientOriginalName();
    		// Get just filename
    		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    		// Get just ext
    		$extension =  $request->file('img')->getClientOriginalExtension();
    		// Filename to store
    		$fileNameToStore = $filename.'_'.time().'.'.$extension;
    		// Upload Image
    		$path = $request->file('img')->storeAs('public/images', $fileNameToStore);
    	}else{
    		$fileNameToStore = 'noimage.jpg';
    	}

    	$first = First_meal::find($id);
    	$first->first_name = $request->input('name');
    	$first->first_cat_id = $request->input('cat_id');
		if($request->hasFile('img')){
			$first->first_img = $fileNameToStore;
		}   
		$first->save();

		return  redirect()->route('menus.first');
    }

    //  Scripts for Accessing Second Meal

    public function getSecondMeal()
    {
    	$meals = DB::table('second_meals AS s')
    			->select('s.second_id', 's.second_name', 's.second_img','c.cat_name')
    			->join('category_list AS c', 's.second_cat_id', '=' , 'c.cat_id')
    			->get();
    	 
    	
    	return view('second')->with('meals',$meals);
    }

     public function deleteSecond($id = null)
    {
    	if( $id != null){
	    	$data = Second_meal::find($id)->delete();
	    	return redirect()->route('menus.second');
    	}
    	else 
    		return  redirect()->route('menus.second');
    }

    public function editSecond( $id = null)
    {
    	$meal = Second_meal::find($id);
    	$categories = Category::select('cat_id','cat_name')->get();

		return view('edits.editSecond', compact('meal','categories'));
    }

    public function updateSecond(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'cat_id' => 'required',
    		'img' => 'image|max:2048'
    	]);
    	$id = $request->input('id');
    	// return $request;
    	// Handle Image
    	if($request->hasFile('img')){
    		// Get filename with the extension
    		$filenameWithExt = $request->file('img')->getClientOriginalName();
    		// Get just filename
    		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    		// Get just ext
    		$extension =  $request->file('img')->getClientOriginalExtension();
    		// Filename to store
    		$fileNameToStore = $filename.'_'.time().'.'.$extension;
    		// Upload Image
    		$path = $request->file('img')->storeAs('public/images', $fileNameToStore);
    	}else{
    		$fileNameToStore = 'noimage.jpg';
    	}

    	$second = Second_meal::find($id);
    	$second->second_name = $request->input('name');
    	$second->second_cat_id = $request->input('cat_id');
		if($request->hasFile('img')){
			$second->second_img = $fileNameToStore;
		}   
		$second->save();

		return  redirect()->route('menus.second')->with('success', 'Meal has been edited');
    }

    public function getSalads()
    {
    	$salads  = DB::table('salads AS s')
    			->select('s.salad_id', 's.salad_name', 's.salad_img','c.cat_id','c.cat_name')
    			->join('category_list AS c', 's.salad_cat_id', '=' , 'c.cat_id')
    			->get();
    	$categories = Category::all();

    	return view('salads', compact('salads','categories'));
    }


}
