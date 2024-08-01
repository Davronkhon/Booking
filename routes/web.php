<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestCategoryController;
use App\Http\Controllers\MainController;


Route::resource('user', UserController::class);
Route::resource('foodcat', FoodCategoryController::class);
Route::resource('rest', RestCategoryController::class);
Route::resource('restaurant', RestaurantController::class);
Route::resource('order', OrderController::class);
Route::resource('client', ClientController::class);
Route::resource('food', FoodController::class);
Route::resource('place', PlaceController::class);
Route::resource('booking', BookingController::class);
Route::resource('order', OrderController::class);

Route::get('/example', [MainController::class, 'index'])->name('index');
Route::get('/home', [MainController::class, 'home'])->name('index');
Route::get('/hotel', [MainController::class, 'hotel'])->name('hotel');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/ravshan', [MainController::class, 'ravshan'])->name('ravshan');


