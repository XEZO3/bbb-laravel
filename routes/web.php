<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\UserController;
use App\Models\Classes;
use App\Models\meetings;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/meetings', function () {
//     return view("lists",['list'=>meetings::all()]);
// });
// Route::get('/meeting/{id}', function ($id) {
//     return view("list",['list'=>meetings::find($id)]);
// });
Route::get('/classes', [ClassesController::class,"index"])->middleware('auth');
Route::get('/class/{class}', [ClassesController::class,"show"])->middleware('auth')->middleware("class");
Route::get('/register', [UserController::class,"register"])->name('login');
Route::post('/user/register', [UserController::class,"store"]);
Route::post('/user/login', [UserController::class,"loginPost"]);
Route::get('/login', [UserController::class,"login"]);
Route::get('/meeting/create',[MeetingController::class,"createMeeting"])->middleware('auth');
// Route::get('/test', function(){
//     echo auth()->user()->name;
// });
