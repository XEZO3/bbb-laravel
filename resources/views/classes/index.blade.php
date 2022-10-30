@extends('_layout')
@section('content')
@unless(count($classes)==0)
<div class="container">
    <div class="row">
@foreach($classes as $class)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$class['class_name']}}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/class/{{$class['id']}}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
@endforeach
</div>
</div>
@else
<p>not found</p>
@endunless
@endsection