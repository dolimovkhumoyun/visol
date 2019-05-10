@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card-deck row">
 @if (count($meals) > 0)  

@foreach ($meals as $meal)
  <div class="col-md-4 mb-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="/storage/images/{{$meal->second_img}}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{$meal->second_name}}</h4>
          <small>Category</small>
          <p class="card-text">{{$meal->second_name}}</p>       
          <input type="hidden" name="id" id="first_id" value="{{$meal->second_id}}">

           <a href="{{ route('menus.edit_second' ,[ 'id' => $meal->second_id]) }} "><button type="button" class="btn  btn-outline-primary col-md-4  mr-4" data-toggle="modal" id="edit_modal" data-target="#myModal">Edit</button></a>

           <a href="{{ route('menus.delete_second' , ['id' => $meal->second_id]) }}"><button type="button" class="btn  btn-outline-danger col-md-4 ml-3">Delete</button></a>       
        </div>
    </div>
  </div> 
@endforeach

 @endif
</div>
</div>

  
@endsection


@section('scripts')
  
  
@endsection