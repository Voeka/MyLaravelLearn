<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', \App\Http\Controllers\MainPageController::class);

Route::get('test', TestController::class);
//Route::get('test', function (){
//    return view("test");
//});
