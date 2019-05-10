@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card-deck row">
 @if (count($categories) > 0)  
 @php
   $i = 0;
 @endphp
@foreach ($categories as $category)
  <div class="col-md-4 mb-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="/storage/images/{{$salads[$i]->salad_img}}" alt="Card image cap">
        <div class="card-body">
          <small>Category</small>

          <h2 class="card-title">{{$category->cat_name}}</h2>
          <p>List of Salads in this Category : </p>
          <h5 class="card-title float-right"><?=str_replace(',',' <br/>', $salads[$i]->salad_name)?></h5>
        
          <input type="hidden" name="id" id="first_id" value="{{$salads[$i]->salad_id}}">

           <a href="{{ route('menus.edit_first' ,[ 'id' => $salads[$i]->salad_id]) }} "><button type="button" class="btn  btn-outline-primary col-md-4  mr-4" data-toggle="modal" id="edit_modal" data-target="#myModal">Edit</button></a>

           <a href="{{ route('menus.delete_first' , ['id' => $salads[$i]->salad_id]) }}"><button type="button" class="btn  btn-outline-danger col-md-4 ml-3">Delete</button></a>       
        </div>
    </div>
  </div> 
  @php
    $i++;
  @endphp
@endforeach

 @endif
</div>
</div>


  
@endsection


@section('scripts')
  
  
@endsection