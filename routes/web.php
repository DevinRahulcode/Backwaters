<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RoomController;
use App\Http\Controllers\Front\StoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\ResponsibilityController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contact');
Route::post('contact-us/store', [ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('/gallery', [GalleryController::class, 'index'])->name('contact');
Route::get('/responsibility', [ResponsibilityController::class, 'index'])->name('responsibility');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/ourstory', [StoryController::class, 'index'])->name('rooms');



Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [BlogController::class, 'show'])->name('blogs.detail');
Route::post('comment/store', [BlogController::class, 'store'])->name('comments.store');


require __DIR__.'/auth.php';


