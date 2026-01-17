<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;

Route::get('/', function () {
    $reviews = Review::orderBy('created_at', 'desc')->take(3)->get();
    return view('welcome', compact('reviews'));
});


// Route::view('/','components.header');

Route::view('/addContent','back-end.addContent');
Route::view('/dashboard','back-end.dashboard');
Route::view('/viewreview','back-end.viewreview');
Route::get('/viewClient', [MailController::class, 'viewMessages'])->name('view.client');
Route::get('/viewreview', [MailController::class, 'viewReview']);
Route::view('/review', 'components.review');
Route::view('/contact','components.contact');
Route::view('/about','components.aboutus2');
Route::view('/services','components.services');
Route::view('/portfolio','components.portfolio');
Route::post('/admin/reply', [MailController::class, 'sendReply'])->name('admin.sendReply');
Route::get('/admin/messages', [MailController::class, 'viewMessages'])->name('admin.messages');
Route::post('send-mail',[MailController::class,'mailApp']);
Route::get('/review', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');