@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-12">
  <div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://dummyimage.com/300x250&text=First Meals" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">First Meals</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer ">
           <a href="{{ route('menus.first') }}"><button type="button" class="btn  btn-outline-primary ">See the list</button></a>
        </div>
      </div>

    <div class="card">
      <img class="card-img-top" src="https://dummyimage.com/300x250&text=Second Meals" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Second Meals</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer ">
        <a href="{{ route('menus.second') }}"><button type="button" class="btn  btn-outline-primary ">See the list</button></a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="https://dummyimage.com/300x250&text=Salads " alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Salads</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer ">
          <a href="{{ route('menus.salads') }}"><button type="button" class="btn  btn-outline-primary">See the list</button>
      </div></a>
    </div>

</div>
</div>
</div>

@endsection
