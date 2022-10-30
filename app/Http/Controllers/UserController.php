<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(){
        return view("users.create");
    }
    function store(Request $request){
        // dd($request);
        $formInputs = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|confirmed',
        ]);
        $formInputs['password']=bcrypt($formInputs['password']);
        $user = User::create($formInputs);
        auth()->login($user);
        return redirect("/")->with('message','hhhhh');
        
    }
}
