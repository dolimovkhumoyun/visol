@extends('layouts.app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-outline-success mb-4 mr-3"
     data-toggle="modal" data-target="#myModal">Add Category</button>

  <div class="card-deck row">
 @if (count($categories) > 0)  

@foreach ($categories as $category)
  <div class="col-md-4 mb-4">
    <div class="card border-primary">
        <div class="card-body text-primary">
          <h3 class="card-title">{{$category->cat_name}}</h3>
          <small>Category Price</small>
          <h5 class="card-text">{{$category->cat_price}}</h5>       
          {{-- <input type="hidden" name="id" id="first_id" value="{{$category->cat_id}}"> --}}

           <a href="{{ route('menus.edit_first' ,[ 'id' => $category->cat_id]) }} "><button type="button" class="btn  btn-outline-primary col-md-4  mr-4" >Edit</button></a>

           <a href="{{ route('menus.delete_first' , ['id' => $category->cat_id]) }}"><button type="button" class="btn  btn-outline-danger col-md-4 ml-3">Delete</button></a>       
        </div>
    </div>
  </div> 
@endforeach

 @endif
</div>
</div>

 

  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Category</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
             <form action="{{ route('category.addCategory') }}" method="POST">

                <div class="form-group">
                  <label for="name">Name of Category</label>
                  <input type="text" class="form-control" id="name" name="name" >
                </div>

                 
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" class="form-control" id="price" min="0" name="price">
                </div>
                 {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
  


@endsection


@section('scripts')
 
@endsection