<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $formInputs['permession'] = "Admin";
        $user = User::create($formInputs);
        auth()->login($user);
        return redirect("/")->with('message','hhhhh');
        
    }
    function login(){
        return view("users.login");
    }
    function loginPost(Request $request){
        $formInputs = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        
        if(Auth::attempt($formInputs)){
            $request->session()->regenerate();
            return redirect("/classes");
        }else{
            return back()->withErrors(["email"=>"user name or password is incorrect"])->onlyInput("email");
        }
    }
}
