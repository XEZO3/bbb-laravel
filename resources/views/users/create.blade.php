@extends('_layout')
@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" action="/user/register">
                @csrf
                <div class="mb-3">
                    <label for="name">full name</label>
                    <input type="text" name="name" class="form-control"/>
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
                </div>
                @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">confirm  Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                  </div>
                  @error('confpassword')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            
        </div>
    </div>
</div>
@endsection