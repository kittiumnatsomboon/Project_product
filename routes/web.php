<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Registercontroller;
Route::get('/', function () {
    return view('index');
});
Route::get('/Register', [Registercontroller::class, 'index']);