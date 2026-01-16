<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('/','components.header');

Route::view('/addContent','back-end.addContent');
Route::view('/dashboard','back-end.dashboard');
Route::get('/viewClient', [MailController::class, 'viewMessages'])->name('view.client');
Route::view('/contact','components.contact');
Route::view('/about','components.aboutus2');
Route::view('/services','components.services');
Route::view('/portfolio','components.portfolio');
Route::post('/admin/reply', [MailController::class, 'sendReply'])->name('admin.sendReply');
Route::get('/admin/messages', [MailController::class, 'viewMessages'])->name('admin.messages');
Route::post('send-mail',[MailController::class,'mailApp']);