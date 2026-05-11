<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('frontend.home');
Route::get('/abouts', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contacts', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/our-teams', [HomeController::class, 'team'])->name('frontend.team');
Route::get('/donations', [HomeController::class, 'donation'])->name('frontend.donation');
Route::get('/testimonials', [HomeController::class, 'testimonial'])->name('frontend.testimonial');
Route::get('/features', [HomeController::class, 'feature'])->name('frontend.feature');
Route::get('/errors-404', [HomeController::class, 'error404'])->name('frontend.error404');

Route::get('bookings', [HomeController::class, 'booking'])->name('frontend.booking');
Route::get('rooms', [HomeController::class, 'room'])->name('frontend.room');
Route::get('services', [HomeController::class, 'service'])->name('frontend.service');
Route::get('privacy-Policys', [HomeController::class, 'policy'])->name('frontend.policy');
Route::get('terms-Conditions', [HomeController::class, 'termsCondition'])->name('frontend.termsCondition');
// Route::get('roomadmin', [HomeController::class, 'roomadmin'])->name('frontend.roomadmin');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminroom', [HomeController::class, 'adminroom'])->middleware(['auth', 'verified'])->name('adminroom');
Route::get('/roomdetails/{id}', [HomeController::class, 'roomdetails'])->middleware(['auth', 'verified'])->name('roomdetails');

Route::get('/createadminroom', function () {
    return view('createadminroom');
})->middleware(['auth', 'verified'])->name('createadminroom');

Route::post('/createadminroom', [HomeController::class, 'storeroom'])->middleware(['auth', 'verified'])->name('createadminroom');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// catagory 
Route::get('/catagoryadmin', [HomeController::class, 'catagoryadmin'])->middleware(['auth', 'verified'])->name('catagoryadmin');
Route::get('/createcatagory', [HomeController::class, 'createcatagory'])->middleware(['auth', 'verified'])->name('createcatagory');
Route::post('/createcatagory', [HomeController::class, 'catagorystore'])->middleware(['auth', 'verified'])->name('catagorystore');
Route::delete('/catagorydestroy/{id}', [HomeController::class, 'catagorydestroy'])->middleware(['auth', 'verified'])->name('catagorydestroy');

// video 
Route::get('/videoadmin', [HomeController::class, 'videoadmin'])->middleware(['auth', 'verified'])->name('videoadmin');
Route::get('/createvideo', [HomeController::class, 'createvideo'])->middleware(['auth', 'verified'])->name('createvideo');
Route::post('/createvideo', [HomeController::class, 'videosstore'])->middleware(['auth', 'verified'])->name('videosstore');
Route::delete('/deletevideo/{id}', [HomeController::class, 'deletevideo'])->middleware(['auth', 'verified'])->name('deletevideo'); 



require __DIR__.'/auth.php';
