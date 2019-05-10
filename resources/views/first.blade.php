@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card-deck row">
 @if (count($meals) > 0)  

@foreach ($meals as $meal)
  <div class="col-md-4 mb-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="/storage/images/{{$meal->first_img}}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{$meal->first_name}}</h4>
          <small>Category</small>
          <p class="card-text">{{$meal->cat_name}}</p>       
          <input type="hidden" name="id" id="first_id" value="{{$meal->first_id}}">

           <a href="{{ route('menus.edit_first' ,[ 'id' => $meal->first_id]) }} "><button type="button" class="btn  btn-outline-primary col-md-4  mr-4" data-toggle="modal" id="edit_modal" data-target="#myModal">Edit</button></a>

           <a href="{{ route('menus.delete_first' , ['id' => $meal->first_id]) }}"><button type="button" class="btn  btn-outline-danger col-md-4 ml-3">Delete</button></a>       
        </div>
    </div>
  </div> 
@endforeach

 @endif
</div>
</div>

 {{--  The Modal 
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">First Meal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
             <form>

                <div class="form-group">
                  <label for="meal">Name of Meal</label>
                  <input type="first_meal_name" class="form-control" id="meal" value="" >
                </div>

                 <div class="form-group">
                  <label for="exampleFormControlSelect1">Category</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    @foreach ($categories as $cat)
                      <option>{{$cat->cat_name}}</option>
                    @endforeach
                  </select>
                </div>


                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> --}}
  
@endsection


@section('scripts')
  <script>
      $(document).on("click", "#edit_modal", function () {
       let id = var number=document.getElementById("first_id").value;
      console.log(id);
       // As pointed out in comments, 
       // it is unnecessary to have to manually call the modal.
       // $('#addBookDialog').modal('show');
  });
  </script>
  
@endsection