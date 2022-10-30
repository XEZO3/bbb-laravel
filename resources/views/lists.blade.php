@extends('layout')
@section('content')
@foreach($list as $row)
 
{{$row['title']}}


@endforeach
@endsection