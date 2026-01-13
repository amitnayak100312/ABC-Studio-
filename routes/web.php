<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','components.aboutus2');
Route::view('/services','components.services');
Route::view('/portfolio','components.portfolio');
// Route::view('/','components.header');

Route::post('send-mail',[MailController::class,'mailApp']);