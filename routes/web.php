<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biralo;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\HTMLFORM;
use App\Http\Controllers\DATABASE;
use App\Http\Controllers\MODELCONTROLLER;
use App\Http\Controllers\PRACTISINGHHTPREQUEST;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect("hello");
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/about', function () {
    return view('about');
});
Route::get("biralo",[Biralo::class,'biralo']);
Route::get('/jovic1',[Biralo::class,'jovic']);
Route::get('balder',[BladeController::class,'Blade']);
Route::view("/login","FORM");
Route::get('FORM',[HTMLFORM::class,'getdata']);
Route::view('home1',"home");
Route::view('user1','userpage');
Route::view('noacess','noacess');
Route::group(['middleware'=>['protectedPages']],function(){
    Route::view('user1','userpage');
});
Route::get("datacontroller",[DATABASE::class,'Biralo']);
Route::get('model',[MODELCONTROLLER::class,'fectdata']);
Route::get('Http',[PRACTISINGHHTPREQUEST::class,'HTTP']);

