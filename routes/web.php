<?php
use App\admin;
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
    return view('pages.login');
});

Auth::routes();

Route::middleware("auth")->group(function(){
Route::get('home', function () {
    if (Auth::user()->level=='a'){
        $data=admin::paginate(10);
        return view("pages.admin.list",compact("data"));
       
    }else{

    return view('pages.home');}
})->name("home");


Route::resource('admin','AdminController');
Route::resource('input','InputController');
});

Route::get('register', function () {
    return view('pages.register');
})->name("register")->middleware("guest");

Route::get('login', function () {
    return view('pages.login');
})->name("login")->middleware("guest");




