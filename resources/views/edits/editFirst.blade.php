@extends('layouts.app')


@section('content')
	<div class="container">
	<form action="{{ route('menus.update_first') }}" enctype="multipart/form-data" method="POST">
	 	<input type="hidden" name="id" value="{{$meal->first_id}}">
	  <div class="form-group col-md-4">
	    <label for="name">Meal Name:</label>
	    <input type="name" class="form-control" id="name" name="name" value="{{$meal->first_name}}">
	  </div>
	 
	   <div class="form-group col-md-4">
	    <label for="cat_id">Category List</label>
	    <select class="form-control" name="cat_id" id="cat_id">
	      @foreach ($categories as $category)
	      	@if($meal->first_cat_id == $category->cat_id)
	      	<option value="{{$category->cat_id}}" selected="">{{$category->cat_name}}</option>
	      	@else
	      	<option value="{{$category->cat_id}}" >{{$category->cat_name}}</option>
	      	@endif
	      @endforeach
	    </select>
  		</div>

  		<div class="form-group">
		  <input type="file" class="" id="customFile" name="img">
		  <label class="form-control" for="customFile">Choose file</label>
		</div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	  {{ csrf_field() }}
	</form>
</div>
@endsection