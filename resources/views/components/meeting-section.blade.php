@props(['class','id'])
<a href="/student/join/{{$id}}" class="row justify-content-center">
@if($class['side']=="left")
    <div class="col-12" >
    <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$class['ImageName']}}" style="width: 100%;height:100%" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$class['title']}}</h5>
        <p class="card-text">{{$class['descreption']}}</p>
         
      </div>
    </div>

  </div>
</div>
    </div>
@else
<div class="col-12" >
    <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$class['title']}}</h5>
        <p class="card-text">{{$class['descreption']}}</p>
         
      </div>
    </div>
    <div class="col-md-4">
        <img src="{{$class['ImageName']}}" style="width: 100%;height:100%" class="img-fluid rounded-start" alt="...">
      </div>
  </div>
</div>
    </div>
@endif
</a>