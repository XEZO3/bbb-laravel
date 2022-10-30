<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
   public function index(){
    return view("classes.index",['classes'=>auth()->User()->classes()->get()]);
   }
   public function show(Classes $class){
    return view("classes.show",['class'=>$class,'section'=>Classes::classComonents()]);
   }
   
}
