@extends('_layout')
@section('content')
<style>
 a{
    color:black;
    text-decoration: none;
   }
   a:hover{
    color:black;
   }
   .img-fluid{
    min-height:20rem;
    min-width:25rem;
    max-width:25rem;
    max-height:20rem;
   }
   .card-title{
    font-size: 3em;
   }
   .card-text{
    font-size: 1.5em;
   }
   .card{
    border:none;
    margin-top: 9rem;
    margin-bottom: 2rem;
   }

</style>
<div class="container">
    <div class="row justify-content-center ">
        @foreach ($section as $item)
            <x-meeting-section :class="$item" :id="$class['id']" >

            </x-meeting-section>
        @endforeach
    </div>
</div>

@endsection