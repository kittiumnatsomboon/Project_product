<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Registercontroller;
Route::get('/', function () {
    return view('index');
});

Route::get('/customer/register',function(){
    return view('register');
})->name('register');
Route::get('/Register', [Registercontroller::class, 'index']);
Route::resource('/customer/Signup',Registercontroller::class);
Route::get('/Customer',[Registercontroller::class,'create']);