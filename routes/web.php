<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// common Resource Routes:
// index - show all listings
// show - Show single listing
// create - show form to create new listing
// store - store a new listing
// edit - show form to edit listing
// update - Update listing
// destroy - Delete listing



//All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//show create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store the listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// show edit form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit'])->middleware('auth');

//updating the submit button
Route::put('/listings/{listing}',[ListingController::class,
'update'])->middleware('auth');

//deleting the listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

// show register/create form
Route::get('/register', [UserController::class,'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log Out User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

// log in user
Route::post('/users/authenticate', [UserController::class,'authenticate'])->middleware('auth');